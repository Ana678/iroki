<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\File;

use App\Models\User;
use App\Models\Family;
use App\Models\Product;
use App\Models\Category;
use App\Models\Task;
use App\Models\Message;
use App\Models\Phrase;


class EventController extends Controller{


    public function cadastro(Request $request){
        $register = new User;

        $novaFamilia = new Family;

        $novaFamilia->save();

        $register->family_id = Family::select('id')->orderBy('id', 'DESC')->first()->id;
        
        $register->name = $request->name;
        $register->email = $request->email;


        if($request->password != $request->password_confirmation){
            return view('auth.register', ['message' => "As senhas não coincidem"]);
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

        $register->master = 1;
        $register->save();
        
        return view('validacao');
    }

    public function recuperarSenha(){
        return view('login.recuperarSenha');
    }

    public function validacao(){
        $sessao = auth()->user();
        if($sessao->master == 1){
            return view('validacao');
        }else{
            return redirect('dashboard');
        }
        
    }

    public function novaSenha(){
        return view('novaSenha');
    }

    public function Login1(){
        $sessao = auth()->user();
        return view('login.Login1', ['sessao' => $sessao]);
    }

    public function Login2(){
        return view('login.Login2');
    }

    public function profile($errorMsg = ''){
        $sessao = auth()->user();  
        $family = Family::where('id', $sessao->family_id)->first();
        $familyMembers = User::where('family_id', $family->id)->get();
        return view('profile', [
            'sessao' => $sessao,
            'family' => $family,
            'familyMembers' => $familyMembers,
            'errorMsg' => $errorMsg
        ]);
    }

    public function categoryDetail($categoryID, $errorMsg = ''){

        $sessao = auth()->user();

        $category = Category::where('id', $categoryID)->first();

        $modalCategories = Category::orderBy('name')->get();

        $products = Product::where('category_id', $categoryID)
                        ->where('family_id', $sessao->family_id)
                        ->where('status', 0)
                        ->get();

        return view('categoryDetail', [
                        'sessao' => $sessao, 
                        'products' => $products, 
                        'category' => $category,
                        'modalCategories' => $modalCategories,
                        'errorMsg' => $errorMsg
        ]);
           
    }

    public function dashboard($errorMsg = '')
    {
        $this->validateDateMessage();
        $sessao = auth()->user();
        $family = Family::where('id', $sessao->family_id)->first();
        $modalCategories = Category::orderBy('name')->get();
        $tasks = Task::where('family_id', $sessao->family_id)->get();
        $messages = Message::where('family_id', $sessao->family_id)->get();

        $phraseId = rand(1, Phrase::all()->count());
        $phrase = Phrase::where('id', $phraseId)->first();

        return view('dashboard', [
            'sessao' => $sessao, 
            'family' => $family,
            'modalCategories' => $modalCategories,
            'tasks' => $tasks,
            'messages' => $messages,
            'phrase' => $phrase,
            'errorMsg' => $errorMsg
        ]);
    }

    public function updateProfileImage(Request $request){
        $sessao = auth()->user();

        if(@isset($sessao->profile_photo_path)) {
            File::delete("assets/img/avatars/".$sessao->profile_photo_path);
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('assets/img/avatars'), $imageName);

            User::where('id',$sessao->id)->update(['profile_photo_path' => $imageName]);
        }

        return redirect('profile');
        
    }

    public function updateProfileData(Request $request){

        $sessao = auth()->user();
        
        $user = User::where('email', $request->email)->first();

        
        if(@isset($user->email)){
            //Email ocupado
            if($user->email == $sessao->email){
                //Email novo igual ao antigo
                if($request->name != $sessao->name){
                    //Porém o nome é diferente
                    User::where('id',$sessao->id)->update(['name' => $request->name]);
                }
                return redirect('profile');
            }
            return $this->profile('Este email já está ocupado');
        }
        
        $email = $request->email;

        User::where('id',$sessao->id)->update([
            'name' => $request->name,
            'email' => $email
        ]);

        return redirect('profile');
        
    }

    public function validateDateMessage(){
        
        $sessao = auth()->user();
        $messages = Message::where('family_id', $sessao->family_id)->get();

        $yToday = date('Y');
        $mToday = date('m');
        $dToday = date('d');

        foreach($messages as $message){

            $y = substr($message->datemessage, 0, 4);
            $m = substr($message->datemessage, 5, 2);
            $d = substr($message->datemessage, 8, 2);
            
            if($yToday > $y){
                Message::where('id', $message->id)->delete();
            }elseif($yToday == $y){
                if($mToday > $m){
                    Message::where('id', $message->id)->delete();
                }elseif($mToday == $m){
                    if($dToday >= $d){
                        Message::where('id', $message->id)->delete();
                    }
                    //Dia atual < Dia do recado
                }
                //Mes atual < Mes do recado
            }
            //Ano atual < Ano do recado

        }
        
    }

}
