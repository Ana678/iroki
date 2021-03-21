<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets/css/untitled.css">

    <?php
        use App\Models\Category;
        use App\Models\Product;

        $count = 0;

        $navbarCategories = Category::orderBy('name')->get();
    ?>

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="background: #68aea1;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                    href="/dashboard">
                    <div class="sidebar-brand-icon rotate-n-15"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-intersect"
                            style="font-size: 32;">
                            <path fill-rule="evenodd"
                                d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5zm6-8H6a2 2 0 0 0-2 2v5H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2z">
                            </path>
                        </svg></div>
                    <div class="sidebar-brand-text mx-3"><span>iroki</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <?php $__currentLoopData = $navbarCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navbarCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $familyCategoryProduct = Product::where('family_id', Auth::user()->family_id)
                                                            ->where('category_id', $navbarCategory->id)
                                                            ->where('status', 0)
                                                            ->first();
                        ?>

                        <?php if(@isset($familyCategoryProduct->category_id)): ?>
                            <li class="nav-item">
                                <form action="categoryDetail">
                                        <a class="nav-link" href="/categoryDetail/<?php echo e($navbarCategory->id); ?>">
                                            <i class="<?php echo e($navbarCategory->icon); ?>"></i>
                                            <span><?php echo e($navbarCategory->name); ?></span>
                                        </a>
                                </form>
                            </li>
                        <?php else: ?>
                            <?php
                                $count+=1;
                            ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($count == 15): ?>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <span>
                                        Você não possui nenhum produto cadastrado!
                                    </span>
                                </a>
                            </li>
                    <?php endif; ?>

                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="navbar-nav flex-nowrap ml-auto ">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link"
                                        aria-expanded="false" 
                                        data-toggle="dropdown" 
                                        href="#">
                                        <span class="d-none d-lg-inline mr-2 text-gray-600 small">
                                            &nbsp;<?php echo e(Auth::user()->name); ?>

                                        </span>
                                        <img class="border rounded-circle img-profile"
                                            <?php if(@isset(Auth::user()->profile_photo_path)): ?>
                                                src="/assets/img/avatars/<?php echo e(Auth::user()->profile_photo_path); ?>"
                                            <?php else: ?>
                                                src="/assets/img/avatars/avatarPadrao.jpeg"
                                            <?php endif; ?>
                                        >
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                        <a class="dropdown-item" href="/profile">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Perfil
                                        </a>
                                        <div class="dropdown-divider"></div>

                                        <form action="/logout" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <a href="/logout" class="dropdown-item" 
                                                onclick="event.preventDefault();
                                                         this.closest('form').submit();">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                                </i>
                                                &nbsp;Sair
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--Conteúdo da página-->
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <footer class="text-center bg-white sticky-footer"><span class="fotterzinho">Copyright ©IROKI 2021</span>
            </footer>
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\iroki\resources\views/layouts/main.blade.php ENDPATH**/ ?>