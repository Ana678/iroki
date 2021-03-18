<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cadastrar conta</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    
</head>

<body class="bg-gradient-primary" style="background-color: #4e73df;background-image: linear-gradient(180deg,#b7cdc9 10%,#68aea1);background-size: cover;">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">
                                    Crie sua conta!
                                </h4>
                            </div>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4','style' => 'font-size:14px;color:red']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','style' => 'font-size:14px;color:red']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <form class="user" method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input  class="form-control form-control-user" 
                                            type="text" 
                                            id="name" 
                                            placeholder="Nome" 
                                            name="name" 
                                            :value="old('name')" 
                                            required autofocus autocomplete="name"
                                    >
                                </div>
                                <div class="form-group">
                                    <input  class="form-control form-control-user" 
                                            type="email" 
                                            id="email" 
                                            aria-describedby="emailHelp" 
                                            placeholder="Endereço de email" 
                                            name="email" 
                                            :value="old('email')" required
                                    >
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input  class="form-control form-control-user" 
                                                type="password" 
                                                id="password" 
                                                placeholder="Senha" 
                                                name="password" 
                                                required autocomplete="new-password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input  class="form-control form-control-user" 
                                                type="password" 
                                                id="password_confirmation" 
                                                placeholder="Repita a senha" 
                                                name="password_confirmation" 
                                                required autocomplete="new-password"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <small class="form-text text-center text-muted" style="margin: 12px 0px 0px;">
                                            Insira Uma Foto de Perfil:&nbsp;
                                        </small>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="btn btn-primary btn-block text-white btn-user" style="background: rgba(231,92,37,0.77);border-color: #E75C25;"> Selecionar
                                            <input class="d-none" type="file" name="image">
                                        </label>
                                    </div>
                                </div>
                                    <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: #E75C25;border-color: #E75C25;">
                                        <?php echo e(__('Registrar conta')); ?>

                                        <br>
                                    </button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="/" style="color: #68aea1;"><br><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-chevron-double-left">
                                        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                    </svg>Voltar<br></a></div>
                            <div class="text-center"><a class="small" href="login" style="color: #68aea1;">Já tem uma conta? Conecte-se!<br><br></a></div>
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

</html><?php /**PATH C:\xampp\htdocs\iroki\resources\views/auth/register.blade.php ENDPATH**/ ?>