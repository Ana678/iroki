<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


use App\Models\Family;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Task;
use App\Models\Message;
use App\Models\Phrase;

class FamilyController extends Controller
{

    public function cadastrarMembro(Request $request){

        $sessao = auth()->user();
        
        $register = new User;

        $register->family_id = $sessao->family_id;
        
        $register->name = $request->name;
        $register->email = $request->email;

        if($request->password != $request->password_confirmation){
            return view('cadastroMembro', ['message' => "As senhas não coincidem"]);
        }
        
        $register->password = Hash::make($request->password);

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('assets/img/avatars'), $imageName);

            $register->profile_photo_path = $imageName;
            
        }

        $register->master = 0;
        $register->save();

        if($request->quantMembros == "Registar Apenas Este Membro"){
            return redirect('profile');
        }elseif($request->quantMembros == "Registrar Este e Outro Membro"){
            return view('cadastroMembro', ['sessao' => $sessao]);
        }
        
    }

    public function updateFamilyImage(Request $request){
        
        $userFamily = auth()->user()->family_id;
        $family = Family::where('id', $userFamily)->first();

        if(@isset($family->family_photo_path)) {
            File::delete("assets/img/family/".$family->family_photo_path);
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('assets/img/family'), $imageName);

            Family::where('id',$family->id)->update(['family_photo_path' => $imageName]);
        }

        return redirect('profile');
        
    }

    public function editarMembro(Request $request, $id){
        $user = User::where('id', $id)->first();

        if($request->edit == 'edit'){
            return view('editarMembro', ['user' => $user]);
        }elseif($request->edit == 'delete'){

            if(@isset($user->profile_photo_path)){
                File::delete("assets/img/avatars/".$user->profile_photo_path);
            }
            User::where('id', $user->id)->delete();
            return redirect('profile');
        }
    }

    public function editandoMembro(Request $request, $id){

        $user = User::where('id', $id)->first();

        if($request->hasFile('image') && $request->file('image')->isValid()){

            if(@isset($user->profile_photo_path)){
                File::delete("assets/img/avatars/".$user->profile_photo_path);
            }

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('assets/img/avatars'), $imageName);

            User::where('id',$id)->update(['profile_photo_path' => $imageName]);
        }

        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('profile');
    }

    public function addProduct(Request $request){

        if(!@isset($request->name) || !@isset($request->quantity)){
            if($_POST['screen'] == 'dashboard'){
                return $this->modalError(0);
            }
            if($_POST['screen'] == 'categoryDetail'){
                return $this->modalError($request->category);
            }
        }else{
        
            $sessao = auth()->user();

            $product = new Product;

            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->description = $request->description;
            $product->status = 0;
            $product->family_id = $sessao->family_id;
            $product->category_id = $request->category;

            $product->save();

            if($_POST['screen'] == 'dashboard'){
                return redirect('dashboard');
            }
            if($_POST['screen'] == 'categoryDetail'){
                return redirect('categoryDetail/'.$request->category);
            }
        }
    }

    public function addTask(Request $request){

        if(!@isset($request->title) || !@isset($request->time)){
            if($_POST['screen'] == 'dashboard'){
                return $this->modalError(20);
            }
            if($_POST['screen'] == 'Login1' || $_POST['screen'] == 'Login1+'){
                return $this->modalError(21);
            }
        }else{
        
            $data = date('Y-m-d').' '.$request->time.':00';

            $sessao = auth()->user();

            $task = new Task;

            $task->title = $request->title;
            $task->date = $data;
            //$task->time = $request->time;??????????????
            $task->description = $request->description;
            $task->family_id = $sessao->family_id;

            $task->save();

            if($_POST['screen'] == 'dashboard'){
                return redirect('dashboard');
            }
            if($_POST['screen'] == 'Login1'){
                return redirect('Login2');
            }
            if($_POST['screen'] == 'Login1+'){
                return redirect('Login1');
            }
        }
    }

    public function addMessage(Request $request){
        $sessao = auth()->user();

        if(!@isset($request->message) || !@isset($request->datemessage)){
            return view('login.Login2', ['errorMsg' => "Preencha todos os campos para poder cadastrar um recado"]);
        }

        $message = new Message;

        $message->datemessage = $request->datemessage;
        $message->message = $request->message;
        $message->family_id = $sessao->family_id;

        $message->save();

        if($_POST['button'] == 'oneMessage'){
            return redirect('dashboard');
        }elseif($_POST['button'] == 'anotherMessage'){
            return redirect('Login2');
        }
        
    }

    public function modalError($id){

        $sessao = auth()->user();
        $modalCategories = Category::orderBy('name')->get();

        switch($id){
            case 0:
                [EventController::class, 'validateDateMessage'];
                $family = Family::where('id', $sessao->family_id)->first();
                $tasks = Task::where('family_id', $sessao->family_id)->get();
                $messages = Message::where('family_id', $sessao->family_id)->get();
                $phraseId = rand(1, Phrase::all()->count());
                $phrase = Phrase::where('id', $phraseId)->first();


                return view('/dashboard', [
                    'sessao' => $sessao, 
                    'family' => $family,
                    'modalCategories' => $modalCategories,
                    'tasks' => $tasks,
                    'messages' => $messages,
                    'phrase' => $phrase,
                    'errorMsg' => "O nome e a quantidade devem ser informados!"
                ]);

            break;

            case 1:case 2:case 3:case 4:case 5:case 6:case 7:case 8:case 9:case 10:case 11:case 12:case 13:case 14:case 15:
                
                $category = Category::where('id', $id)->first();

                $products = Product::where('category_id', $id)
                                ->where('family_id', $sessao->family_id)
                                ->get();

                return view('/categoryDetail', [
                                'sessao' => $sessao, 
                                'products' => $products, 
                                'category' => $category,
                                'modalCategories' => $modalCategories,
                                'errorMsg' => "O nome e a quantidade devem ser informados!"
                ]);
            break;

            case 20:
                
                [EventController::class, 'validateDateMessage'];
                $family = Family::where('id', $sessao->family_id)->first();
                $tasks = Task::where('family_id', $sessao->family_id)->get();
                $messages = Message::where('family_id', $sessao->family_id)->get();
                $phraseId = rand(1, Phrase::all()->count());
                $phrase = Phrase::where('id', $phraseId)->first();

                return view('/dashboard', [
                    'sessao' => $sessao, 
                    'family' => $family,
                    'modalCategories' => $modalCategories,
                    'tasks' => $tasks,
                    'messages' => $messages,
                    'phrase' => $phrase,
                    'errorMsg' => "O título e a hora devem ser informados!"
                ]);
            break;
            case 21:
                $sessao = auth()->user();
                return view('login.Login1', ['sessao' => $sessao, 'errorMsg' => "O título e a hora devem ser informados!"]);
            break;
        }
    }

    public function editProduct($productId){
        $sessao = auth()->user();

        $product = Product::where('id', $productId)->first();

        if($_POST['button'] == 'bought'){
            Product::where('id', $productId)->update(['status' => 1]);
        }elseif($_POST['button'] == 'unnecessary'){
            Product::where('id', $productId)->update(['status' => 2]);
        }
        return redirect('categoryDetail/'.$product->category_id);
    }

    public function deleteTask($taskId){

        $task = Task::where('id', $taskId)->delete();

        return redirect('dashboard');
    }

}
