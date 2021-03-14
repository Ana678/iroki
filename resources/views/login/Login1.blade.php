@extends('layouts.loginLayout')

@section('title', 'Recuperar senha')

@section('content')
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="color: rgb(90, 92, 105);">Olá {{$sessao->name}}, tenha um ótimo dia!</h4>
                            </div>
                            <form class="user" action="addTask" method="POST">
                                @csrf
                                <div class="form-group row justify-content-center">
                                    <small class="form-text text-muted" style="margin: 12px 0px 0px;font-size: 14px;">
                                        Gostaria de cadastrar alguma coisa na lista de afazeres da família?
                                    </small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input  class="form-control form-control-user" 
                                                type="text"
                                                id="title" 
                                                placeholder="Nome do afazer" 
                                                name="title"
                                        >
                                    </div>
                                    <div class="col-sm-6">
                                        <input  class="form-control form-control-user" 
                                                type="time"
                                                id="time"
                                                name="time"
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input  class="form-control form-control-user" 
                                            type="text" 
                                            id="description" 
                                            placeholder="Caso tenha uma explicação específica"
                                            name="description"
                                    >
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button class="btn btn-primary btn-block text-white btn-user" 
                                                type="submit" 
                                                style="background: #E75C25;border-color: #E75C25;"
                                                name="screen"
                                                value="Login1+"
                                        >
                                            Cadastrar Este e Outro Afazer
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-primary btn-block text-white btn-user" 
                                                type="submit" 
                                                style="background: #E75C25;border-color: #E75C25;"
                                                name="screen"
                                                value="Login1"
                                        >
                                            Registar Apenas Este Afazer
                                            <br>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="Login2" style="color: #68aea1;">
                                    <br><b>Não Cadastrar Afazeres</b><br>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(@isset($errorMsg))
        <script>
            alert("{{$errorMsg}}");
        </script>
    @endif
@endsection