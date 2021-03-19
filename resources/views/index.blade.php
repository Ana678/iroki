<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Iroki</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    
    <?php
        use App\Models\Category;
        use App\Models\Phrase;

        Category::firstOrCreate(['name' => 'Alimentos Básicos'],['icon' => 'fas fa-shopping-basket']);
        Category::firstOrCreate(['name' => 'Cereais'],['icon' => 'fab fa-pagelines']);
        Category::firstOrCreate(['name' => 'Enlatados'],['icon' => 'icon ion-soup-can']);
        Category::firstOrCreate(['name' => 'Frios e Congelados'],['icon' => 'fas fa-snowflake']);
        Category::firstOrCreate(['name' => 'Açougue e Peixes'],['icon' => 'fas fa-store']);
        Category::firstOrCreate(['name' => 'Laticínios'],['icon' => 'fas fa-cheese']);
        Category::firstOrCreate(['name' => 'Bebidas'],['icon' => 'fas fa-glass-cheers']);
        Category::firstOrCreate(['name' => 'Padaria'],['icon' => 'fa fa-birthday-cake']);
        Category::firstOrCreate(['name' => 'Guloseimas'],['icon' => 'fas fa-ice-cream']);
        Category::firstOrCreate(['name' => 'Itens de Pets'],['icon' => 'icon ion-ios-paw-outline']);
        Category::firstOrCreate(['name' => 'Frutas e Vegetais'],['icon' => 'far fa-lemon']);
        Category::firstOrCreate(['name' => 'Higiene Pessoal'],['icon' => 'fas fa-toilet-paper']);
        Category::firstOrCreate(['name' => 'Limpeza Doméstica'],['icon' => 'fas fa-broom']);
        Category::firstOrCreate(['name' => 'Utilidades'],['icon' => 'fa fa-star']);
        Category::firstOrCreate(['name' => 'Outros'],['icon' => 'icon ion-ios-football']);
    ?>
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md fixed-top" 
            id="mainNav" 
            style="background: rgba(0,0,0,0);border-color: rgba(0,0,0,0);"
    >
        <div class="row d-flex" 
                style="padding-right: 0;padding-left: 0; flex-wrap: wrap; width: 100%;margin-right: auto; margin-left: auto; align-items:center;justify-content: space-between;max-width: 1140px;"
        >
            <a class="navbar-brand js-scroll-trigger" 
                href="#" 
                style="color: #42424c;font-family: Poppins, sans-serif;"
            >
                <svg xmlns="http://www.w3.org/2000/svg" 
                        width="1em" 
                        height="1em" 
                        viewBox="0 0 16 16" 
                        fill="currentColor" 
                        class="bi bi-intersect" 
                        style="font-size: 35px;"
                >
                    <path fill-rule="evenodd" 
                            d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5zm6-8H6a2 2 0 0 0-2 2v5H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2z"
                    ></path>
                </svg>&nbsp;iroki
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#" style="color: rgb(35,39,41);font-size: 23px;"></a>
            <button data-toggle="collapse" 
                    class="navbar-toggler navbar-toggler-right" 
                    data-target="#navbarResponsive" 
                    type="button" 
                    aria-controls="navbarResponsive" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation" 
                    value="Menu" 
                    style="border-color: rgb(66,66,76);padding: 4px 8px;"
            >
            <i class="fa fa-bars" style="color: rgb(66,66,76);"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger">
                        <a class="nav-link js-scroll-trigger" href="register" style="color: #42424c;font-size: 19px;font-family: Poppins, sans-serif;">cadastro</a>
                    </li>
                    <li class="nav-item nav-link js-scroll-trigger" style="border-left-color: #42424c;">
                        <a class="nav-link js-scroll-trigger" href="login" style="color: #42424c;border-radius: 0;font-family: Poppins, sans-serif;border-style: none;border-top-style: none;border-top-color: rgb(52,58,64);border-right-style: solid;border-right-color: #42424c;border-bottom-style: solid;border-bottom-color: #42424c;border-left-style: none;border-left-color: #42424c;"><strong>log in</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container intro-body">
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-6 offset-lg-5 mx-auto">
                    <p class="text-right intro-text" style="color: #42424c;font-size: 25px;font-family: Poppins, sans-serif;font-weight: 700;line-height: 1.4;"><strong>A solução que une o que você quer com o que você pode comprar.</strong></p>
                    <p class="text-right intro-text" style="font-family: Poppins, sans-serif;font-size: 18px;color: #42424c;">Perfeito para você que deseja organizar sua lista de compras para o final do mês.</p><a class="btn btn-link float-right btn-circle" role="button" href="login" style="color: #42424c;padding-top: 3px;padding-bottom: 3px;margin-right: 20%;border-top-color: rgb(52,58,64);border-right-color: rgb(52,58,64);border-bottom-color: rgb(52,58,64);border-left-color: #42424c;font-family: Poppins, sans-serif;" align="right"><i class="fa fa-angle-double-right animated" style="color: #42424c;"></i></a>
                </div>
            </div>
        </div>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>