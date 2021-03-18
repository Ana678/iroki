

<?php $__env->startSection('title', 'Recuperar senha'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container" style="display: flex;align-items: center;justify-content: center;">
        <div class="card shadow-lg o-hidden border-0 my-5" style="width: 557px;min-width: 140px;">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <form class="user" method="POST" action="<?php echo e(route('password.update')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
                                <input type="hidden" name="email" value="<?php echo e($request->email); ?>" />

                                <div class="form-group">
                                    <div class="form-row justify-content-center align-items-center">
                                        <h4 class="text-center text-dark mb-4" style="margin-top: 24px;">Nova senha</h4>
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
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="password" placeholder="Nova Senha" name="password" required autocomplete="new-password" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="password" placeholder="Repetir Nova Senha" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                                <hr>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="margin-bottom: 10px;background: #E75C25;border-color: #E75C25;"><?php echo e(__('Redefinir Senha')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.loginLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iroki\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>