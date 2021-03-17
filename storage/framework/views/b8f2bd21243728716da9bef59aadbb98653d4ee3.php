

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container" style="display: flex;align-items: center;justify-content: center;box-shadow: 0px 0px;">
        <div class="card shadow-lg o-hidden border-0 my-5" style="width: 557px;min-width: 140px;">
            <div class="card-body p-0" style="box-shadow: 0px 0px 0px 20px;">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center"></div>
                                <?php if(session('status')): ?>
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>
                            <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col align-items-center text-center" 
                                            style="margin: 40px 0px;"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" 
                                                width="1em" 
                                                height="1em"
                                                viewBox="0 0 16 16" 
                                                fill="currentColor"
                                                class="bi bi-intersect align-items-center text-center"
                                                style="width: 100px;height: 100px;color: rgb(112,120,119);"
                                            >
                                                <path   fill-rule="evenodd"
                                                        d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5zm6-8H6a2 2 0 0 0-2 2v5H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2z"
                                                ></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                <div class="form-group">
                                    <input  class="form-control form-control-user" 
                                            type="email" 
                                            id="exampleInputEmail"
                                            aria-describedby="emailHelp" 
                                            placeholder="Endereço de email" 
                                            name="email"
                                            :value="old('email')" required autofocus
                                    >
                                </div>
                                <div class="form-group">
                                    <input  class="form-control form-control-user" 
                                            type="password" 
                                            id="password"
                                            placeholder="Senha" 
                                            name="password"
                                            required autocomplete="current-password"
                                    >
                                </div>
                          <!--      <div class="custom-control custom-checkbox small" style="margin: 20px 0px;padding: 0px;">
                                    <div>
                                        <fieldset style="padding: 0px 15px;">
                                            <div class="block mt-4">
                                                <label for="remember_me" class="flex items-center">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                                    <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Permanecer Logado')); ?></span>
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>  -->
                                <button class="btn btn-primary btn-block text-white btn-user" 
                                        type="submit"
                                        style="background: #E75C25;border-color: #E75C25;"
                                >
                                    <?php echo e(__('Entrar')); ?>

                                </button>
                                <hr>
                            </form>
                                <div class="text-center">
                                <?php if(Route::has('password.request')): ?>
                                    <a class="small" href="inserirEmail" style="color: #68aea1;">
                                        <br>
                                        <?php echo e(__('Esqueceu a senha?')); ?>

                                        <br>
                                    </a>
                                <?php endif; ?>    
                                </div>
                            <div class="text-center">
                                <a class="small" href="register" style="color: #68aea1;">
                                    Não tem uma conta? Cadastre-se aqui.
                                    <br>
                                    <br>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.loginLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iroki\resources\views/auth/login.blade.php ENDPATH**/ ?>