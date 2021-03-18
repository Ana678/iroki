<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <?php
        $sessao = auth()->user();
    ?>

</head>

<body class="bg-gradient-primary" style="background: rgb(104,174,161);">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <?php if(@isset($sessao->email_verified_at)): ?>
                                <div class="text-center">
                                    <h4 class="text-dark mb-4" style="color: rgb(90, 92, 105);">O que você deseja no momento?</h4>
                                </div>
                                <form class="user">
                                    <div class="form-group row" style="margin: 36px -12px;">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <a href="cadastroMembro">
                                                <button class="btn btn-primary btn-block text-white btn-user" 
                                                        type="button" 
                                                        style="background: #E75C23;border-color: #E75C25;"
                                                >
                                                    Inserir membro(s) na família
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="Login1">
                                                <button class="btn btn-primary btn-block text-white btn-user" 
                                                        type="button" 
                                                        style="background: #E75C25;border-color: #E75C25;"
                                                >
                                                    Acessar o Sistema<br>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <br>Você também pode inserir membros da sua família pela tela do seu perfil!<br>
                                </div>
                    
                            <?php else: ?>
                                <h4 class="text-dark mb-4 text-center" style="color: rgb(90, 92, 105);">Verifique o seu email antes de acessar o sistema!</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\iroki\resources\views/validacao.blade.php ENDPATH**/ ?>