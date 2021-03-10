<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Family;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\File;


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

        return view('profile', [
            'sessao' => $sessao, 
            'family' => $family
        ]);
    }

    public function categoryDetail($id){
        $sessao = auth()->user();

        if($sessao->master == 1){
            return view('categoryDetailM', ['sessao' => $sessao, 'category_id' => $id]);
        }elseif($sessao->master == 0){
            return view('categoryDetailC', ['sessao' => $sessao, 'category_id' => $id]);
        }   
    }

    public function dashboard()
    {
        $sessao = auth()->user();
        return view('dashboard', ['sessao' => $sessao]);
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
        $email = $request->email;

        User::where('id',$sessao->id)->update([
            'name' => $name,
            'email' => $email
        ]);

        return redirect('profile');
        
    }

}
