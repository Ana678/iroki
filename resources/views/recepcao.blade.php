<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #68aea1;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-intersect" style="font-size: 32;">
                            <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5zm6-8H6a2 2 0 0 0-2 2v5H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v2z"></path>
                        </svg></div>
                    <div class="sidebar-brand-text mx-3"><span>iroki</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Frios</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="tableMaster.html"><i class="fas fa-table"></i><span>Cereais</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Frutas</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Gelados</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">&nbsp;Maria</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark" style="color: rgb(90, 92, 105);margin-bottom: 15px;"><strong>Painel da Familia</strong></h3>
                        <div id="modal-open">
                            <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title" style="color: rgb(90,92,105);"><strong>Adicionar Produto</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-row" style="margin: 15px -5px;">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>Nome</strong></label><input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city" style="width: 100%;"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Quantidade</strong></label><input class="form-control" type="text" id="country-1" placeholder="10" name="country" style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin: 15px -5px;">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>Categoria</strong></label><select class="form-control" style="width: 100%;">
                                                                <optgroup label="This is a group">
                                                                    <option value="12" selected="">This is item 1</option>
                                                                    <option value="13">This is item 2</option>
                                                                    <option value="14">This is item 3</option>
                                                                </optgroup>
                                                            </select></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Descrição</strong></label><input class="form-control" type="text" id="country-2" placeholder="USA" name="country" style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-center"><button class="btn btn-warning" data-dismiss="modal" style="border-color: #e75c25;background: #e75c25;" type="button">Voltar</button><button class="btn btn-warning" data-dismiss="modal" style="background: #e75c25;border-color: #e75c25;" type="button">Salvar</button></div>
                                    </div>
                                </div>
                            </div><a class="btn btn-primary btn-sm d-inline-block d-sm-inline-block" role="button" data-toggle="modal" style="background: #e75c25;border-color: #e75c25;" data-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="fa-sm" style="color: rgb(255,255,255);font-size: 14px;margin-right: 6px;margin-top: -3px;">
                                    <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg><strong>Adicionar Novo Produto</strong></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="card shadow mb-4 align-items-center">
                                <div class="card-body text-center"><img class="img-no-padding img-responsive img-fluid" src="assets/img/depositphotos_50696813-stock-photo-family-playing-soccer-in-park.jpg"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div id="modal-open-1">
                                        <div class="modal fade" role="dialog" tabindex="-1" id="exampleModal-1" aria-labelledby="exampleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h4 class="modal-title" style="color: rgb(90,92,105);"><strong>Adicionar Afazeres</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group"><label for="city"><strong>Título</strong><br></label><input class="form-control" type="text" id="city-1" placeholder="Los Angeles" name="city" style="width: 100%;"></div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer justify-content-center"><button class="btn btn-warning" data-dismiss="modal" style="border-color: #e75c25;background: #e75c25;" type="button">Voltar</button><button class="btn btn-warning" data-dismiss="modal" style="background: #e75c25;border-color: #e75c25;" type="button">Salvar</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn btn-primary btn-sm d-none float-right d-sm-inline-block" role="button" style="color: rgb(57,42,42);border-radius: 100%;margin-top: -5px;width: 31px;background: #e75c25;border-color: #e75c25;" data-toggle="modal" data-target="#exampleModal-1"><i class="icon ion-android-add fa-sm" style="color: rgb(255,255,255);"></i></a>
                                    </div>
                                    <h6 class="text-primary font-weight-bold m-0" style="color: #e75c25! important;">Lista de Afazeres</h6>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <h6 class="mb-0"><strong>Ir a feira da vila</strong></h6><span class="text-xs">8:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <h6 class="mb-0"><strong>Fazer almoço de aniversário para a Luiza</strong><br></h6><span class="text-xs">11:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-2"><label class="custom-control-label" for="formCheck-2"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col mr-2">
                                                <h6 class="mb-0"><strong>Lembrar de pegar o bolo da Luiza!</strong><br></h6><span class="text-xs">12:30 AM</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-3"><label class="custom-control-label" for="formCheck-3"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-6 offset-xl-0 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Biblia jesus 1189/30</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><em>a familia é a luz!</em></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8 col-xl-6 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Recado</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>-Matilde, lembre de não comer doce</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="text-center bg-white sticky-footer"><span class="fotterzinho">Copyright ©IROKI 2021</span></footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>