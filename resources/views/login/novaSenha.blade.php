@extends('layouts.loginLayout')

@section('title', 'Recuperar senha')

@section('content')
    <div class="container" style="display: flex;align-items: center;justify-content: center;">
        <div class="card shadow-lg o-hidden border-0 my-5" style="width: 557px;min-width: 140px;">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <form class="user">
                                <div class="form-group">
                                    <div class="form-row justify-content-center align-items-center">
                                        <h4 class="text-center text-dark mb-4" style="margin-top: 24px;">Nova senha</h4>
                                    </div>
                                </div>
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nova Senha" name="senha"></div>
                                <div class="form-group"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Repetir Nova Senha" name="newpassword"></div>
                                <div class="custom-control custom-checkbox small" style="margin: 20px 0px;padding: 0px;">
                                    <div>
                                        <fieldset style="padding: 0px 15px;">
                                            <div class="custom-control custom-checkbox"><input type="checkbox" id="customCheck2" class="custom-control-input"><label class="custom-control-label" for="customCheck2">Lembrar Senha</label></div>
                                        </fieldset>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="margin-bottom: 10px;background: #E75C25;border-color: #E75C25;">OK</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection