<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="font-medium text-red-600">
            <?php
                echo e(__('Opa! Algo deu errado.'));
            ?>
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <?php 
                $__currentLoopData = $errors->all(); 
                $__env->addLoop($__currentLoopData); 
                foreach($__currentLoopData as $error): 
                    $__env->incrementLoopIndices(); 
                    $loop = $__env->getLastLoop();
            ?>
                    <li>
                        <?php
                            if(e($error) == "These credentials do not match our records."){
                                echo e("Esse usuário não foi encontrado.");
                            }else if(e($error) == "The email has already been taken."){
                                echo e("Esse email já está ocupado.");
                            }else if(e($error) == "The password confirmation does not match."){
                                echo e("A confirmação de senha não foi compatível");
                            }else if(e($error) == "The password must be at least 8 characters."){
                                echo e("A senha deve conter pelo menos 8 caracteres.");
                            }
                        ?>
                    </li>
            <?php 
                endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop();
            ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\iroki\vendor\laravel\jetstream\src/../resources/views/components/validation-errors.blade.php ENDPATH**/ ?>