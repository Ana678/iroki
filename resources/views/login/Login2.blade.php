<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body class="bg-gradient-primary" style="background: #68aea1;">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="color: rgb(90, 92, 105);">Continuando . . .</h4>
                            </div>
                            <form class="user" action="addMessage" method="POST">
                                @csrf
                                <div class="form-group row justify-content-center">
                                    <small class="form-text text-muted" style="margin: 12px 0px 0px;font-size: 14px;">
                                        Gostaria de deixar algum recado importante para sua família?
                                    </small>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" 
                                            type="text"
                                            placeholder="Ex.: Maria lembre de lavar a louça" 
                                            name="message"
                                    >
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button class="btn btn-primary btn-block text-white btn-user" 
                                                type="submit" 
                                                style="background: #E75C25;border-color: #E75C25;"
                                                name="button"
                                                value="anotherMessage"
                                        >
                                            Cadastrar Este e Outro Recado
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-primary btn-block text-white btn-user" 
                                                type="submit" 
                                                style="background: #E75C25;border-color: #E75C25;"
                                                name="button"
                                                value="oneMessage"
                                        >
                                            Registar Apenas Este Recado
                                            <br>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="dashboard" style="color: #68aea1;">
                                    <br><b>Não Cadastrar Recados</b><br>
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
            alert('{{$errorMsg}}')
        </script>
    @endif
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>