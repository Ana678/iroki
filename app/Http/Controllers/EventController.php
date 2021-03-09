<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Family;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;

class EventController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

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

    public function cadastroFamilia()
    {
        return view('cadastroFamilia');
    }

    public function inserirEmail()
    {
        return view('login.recuperarSenha');
    }

    public function novaSenha()
    {
        return view('novaSenha');
    }

    public function primeiroLogin(){
        
        $sessao = auth()->user();

        $sessao->id;

        return view('login.primeiroLogin');
    }

    public function primeiroLogin2()
    {
        return view('primeiroLogin2');
    }

    public function normalLogin()
    {
        return view('normalLogin');
    }

    public function profile()
    {
        $sessao = auth()->user();
        return view('profile', ['sessao' => $sessao]);
    }

    public function tableMaster()
    {
        $sessao = auth()->user();
        return view('tableMaster', ['sessao' => $sessao]);
    }

    public function tableSimples()
    {
        $sessao = auth()->user();
        return view('tableSimples', ['sessao' => $sessao]);
    }

    public function dashboard()
    {
        $sessao = auth()->user();
        return view('dashboard', ['sessao' => $sessao]);
    }


    public function updateProfileImage(Request $request){

        $sessao = auth()->user();

        $image = $request->all();

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('assets/img/avatars'), $imageName);

            $sessao->profile_photo_path = $imageName;

            
            User::findOrFail($sessao->id)->update($sessao->profile_photo_path);
        }
        
        
        return view('profile', ['sessao' => $sessao]);
        
    }
}
