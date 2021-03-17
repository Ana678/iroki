<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Iroki</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets/css/untitled.css">
</head>

<body class="bg-gradient-primary" style="background: #68aea1;background-image: linear-gradient(180deg,#b7cdc9 10%,#68aea1);">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="color: rgb(90, 92, 105);">
                                    @if(@isset($message))
                                        {{$message}}
                                    @else
                                        Editando {{$user->name}}
                                    @endif
                                </h4>
                            </div>
                            <form class="user" action="../editandoMembro/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control form-control-user" 
                                            type="text" 
                                            placeholder="Nome" 
                                            name="name"
                                            value="{{$user->name}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" 
                                            type="email" 
                                            id="exampleInputEmail" 
                                            aria-describedby="emailHelp" 
                                            placeholder="Email" 
                                            name="email"
                                            value="{{$user->email}}"
                                    >
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <small class="form-text text-center text-muted" style="margin: 12px 0px 0px;">
                                            Insira Uma Foto de Perfil:&nbsp;
                                        </small>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="btn btn-primary btn-block text-white btn-user" style="background: rgba(231,92,37,0.77);border-color: #E75C25;">
                                            Selecionar
                                            <input class="d-none" type="file" name="image" value="/assets/img/avatars/{{$user->profile_photo_path}}">
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="btn btn-primary btn-block text-white btn-user" 
                                                onclick="location.href='../profile'" 
                                                style="background: #e75c25;border-color: #e75c25;border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"
                                                value="Voltar"
                                        >
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="btn btn-primary btn-block text-white btn-user" 
                                                type="submit" 
                                                style="background: #e75c25;border-color: #e75c25;border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"
                                                value="Editar"
                                        >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>