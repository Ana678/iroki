

<?php $__env->startSection('title', 'Recuperar senha'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="color: rgb(90, 92, 105);">Olá <?php echo e($sessao->name); ?>, tenha um ótimo dia!</h4>
                            </div>
                            <form class="user">
                                <div class="form-group row justify-content-center">
                                    <small class="form-text text-muted" style="margin: 12px 0px 0px;font-size: 14px;">
                                        Gostaria de cadastrar alguma coisa na lista de afazeres da família?
                                    </small>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nome da Tarefa" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: #E75C25;border-color: #E75C25;">
                                            Cadastrar Este e Outro Item
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: #E75C25;border-color: #E75C25;">
                                            Registar Apenas Este Item
                                            <br>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="primeiroLogin2" style="color: #68aea1;">
                                    <br><b>Não Cadastrar Afazeres</b><br>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.loginLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\iroki\resources\views/login/normalLogin.blade.php ENDPATH**/ ?>