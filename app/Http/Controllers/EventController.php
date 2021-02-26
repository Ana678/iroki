<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $register = new Event;
        $register->email = $request->email;
        $register->senha = $request->senha;
        $register->nome = $request->nome;
        $register->telefone = $request->telefone;

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $register->image = $imageName;
            
        }
    }

    public function validacao()
    {
        return view('validacao');
    }

    public function cadastroFamilia()
    {
        return view('cadastroFamilia');
    }

    public function inserirEmail()
    {
        return view('inserirEmail');
    }

    public function novaSenha()
    {
        return view('novaSenha');
    }

    public function PrimeiroLogin()
    {
        return view('PrimeiroLogin');
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
        return view('profile');
    }

    public function tableMaster()
    {
        return view('tableMaster');
    }

    public function tableSimples()
    {
        return view('tableSimples');
    }

    public function recepcao()
    {
        return view('recepcao');
    }
}
