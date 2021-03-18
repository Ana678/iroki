@extends('layouts.loginLayout')

@section('title', 'Recuperar senha')

@section('content')
    <div class="container" style="display: flex;align-items: center;justify-content: center;">
        <div class="card shadow-lg o-hidden border-0 my-5" style="width: 557px;min-width: 140px;">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <form class="user" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <input type="hidden" name="email" value="{{ $request->email }}" />

                                <div class="form-group">
                                    <div class="form-row justify-content-center align-items-center">
                                        <h4 class="text-center text-dark mb-4" style="margin-top: 24px;">Nova senha</h4>
                                    </div>
                                </div>
                                <x-jet-validation-errors class="mb-4" style="font-size:14px;color:red" />
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="password" placeholder="Nova Senha" name="password" required autocomplete="new-password" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="password" placeholder="Repetir Nova Senha" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                                <hr>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="margin-bottom: 10px;background: #E75C25;border-color: #E75C25;">{{ __('Redefinir Senha') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection