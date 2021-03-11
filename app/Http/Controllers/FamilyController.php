<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Family;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
}
