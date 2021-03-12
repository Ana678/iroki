<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Family;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;


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

    public function novaSenha(){
        return view('novaSenha');
    }

    public function primeiroLogin(){
        return view('login.primeiroLogin');
    }

    public function primeiroLogin2(){
        return view('login.primeiroLogin2');
    }

    public function normalLogin(){
        return view('normalLogin');
    }

    public function profile(){
        $sessao = auth()->user();  
        $family = Family::where('id', $sessao->family_id)->first();
        $familyMembers = User::where('family_id', $family->id)->get();

        return view('profile', [
            'sessao' => $sessao,
            'family' => $family,
            'familyMembers' => $familyMembers
        ]);
    }

    public function profileEmailError(){
        $sessao = auth()->user();
        $family = Family::where('id', $sessao->family_id)->first();
        $familyMembers = User::where('family_id', $family->id)->get();

        $msg = 'Este email já está ocupado';

        return view('profile', [
            'sessao' => $sessao,
            'family' => $family,
            'familyMembers' => $familyMembers,
            'msg' => $msg
        ]);
    }

    public function categoryDetail($categoryID){

        $sessao = auth()->user();

        $category = Category::where('id', $categoryID)->first();

        $modalCategories = Category::all();

        $products = Product::where('category_id', $categoryID)
                        ->where('family_id', $sessao->family_id)
                        ->get();

        return view('categoryDetail', [
                        'sessao' => $sessao, 
                        'products' => $products, 
                        'category' => $category,
                        'modalCategories' => $modalCategories
        ]);
           
    }

    public function dashboard()
    {
        $sessao = auth()->user();
        $family = Family::where('id', $sessao->family_id)->first();

        return view('dashboard', [
            'sessao' => $sessao, 
            'family' => $family
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
        
        $name = $request->name;

        $user = User::where('email', $request->email)->first();

        if($request->email == $user->email && $request->email != $sessao->email){
            //Email já ocupado
            //Como mostrar pro usuário???
            return redirect('profileEmailError');
        }
        
        $email = $request->email;

        User::where('id',$sessao->id)->update([
            'name' => $name,
            'email' => $email
        ]);

        return redirect('profile');
        
    }

}
