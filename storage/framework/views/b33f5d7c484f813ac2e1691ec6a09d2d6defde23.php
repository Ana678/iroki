

<?php $__env->startSection('title', 'Recuperar senha'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container" style="display: flex;align-items: center;justify-content: center;box-shadow: 0px 0px;">
        <div class="card shadow-lg o-hidden border-0 my-5" style="width: 557px;min-width: 140px;">
            <div class="card-body p-0" style="box-shadow: 0px 0px 0px 20px;">
                <div class="row">
                    <div class="col">
                        <div class="p-5">

                            <form class="user" method="POST" action="<?php echo e(route('password.email.personalizado')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div class="form-row justify-content-center align-items-center">
                                        <h4 class="text-center text-dark mb-4" style="margin-top: 24px;">Digite seu email!
                                        </h4>
                                    </div>
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
                                <?php if(session('status')): ?>
                                <div class="mb-4 font-medium text-sm text-green-600" style="font-size:14px;color:green">
                                    <?php echo e(session('status')); ?>

                                </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <input class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="exemplo@hotmail.com"
                                        type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                <button
                                    class="btn btn-primary btn-block text-white btn-user" type="submit"
                                    style="margin-bottom: 10P;background: #e75c25;border-color: #e75c25;"><?php echo e(__('Ok')); ?></button>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="login" style="color: rgb(104,174,161);">
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                        class="bi bi-chevron-double-left">
                                    <path fill-rule="evenodd"
                                        d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                    </path>
                                    </svg>Voltar<br></a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.loginLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iroki\resources\views/login/inserirEmail.blade.php ENDPATH**/ ?>