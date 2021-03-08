<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $register->name = $request->name;
        $register->email = $request->email;
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
        return view('login.inserirEmail');
    }

    public function novaSenha()
    {
        return view('novaSenha');
    }

    public function primeiroLogin()
    {
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
}
