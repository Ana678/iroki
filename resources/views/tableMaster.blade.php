<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
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
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Frios</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="tableMaster.html"><i class="fas fa-table"></i><span>Cereais</span></a></li>
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
                    <h3 class="text-dark mb-4"><strong>Detalhes da Categoria</strong></h3>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Produto</th>
                                            <th>Quantidade</th>
                                            <th>Descrição</th>
                                            <th class="text-center" style="width: 118px;">Comprei</th>
                                            <th style="width: 118px;">Não comprei</th>
                                            <th class="text-center" style="width: 118px;">Não foi necessário</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Lubs Lubs</td>
                                            <td>50000</td>
                                            <td>ewew</td>
                                            <td class="text-center" style="width: 109px;"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-check"></i></button></td>
                                            <td class="text-center" style="width: 79px;"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-remove"></i></button></td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-thumbs-o-down"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Cluvs<br></td>
                                            <td>54656</td>
                                            <td>wewe</td>
                                            <td class="text-center" style="width: 109px;"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-check"></i></button></td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-remove"></i></button></td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-thumbs-o-down"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Plubs<br></td>
                                            <td>45454</td>
                                            <td>we</td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-check"></i></button></td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-remove"></i></button></td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-thumbs-o-down"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Crugs<br></td>
                                            <td>434343</td>
                                            <td>ewewew</td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-check"></i></button></td>
                                            <td class="text-center" style="width: 99px;"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-remove"></i></button></td>
                                            <td class="text-center"><button class="btn btn-primary" type="button" style="background: #E75C25;border-color: #E75C25;"><i class="fa fa-thumbs-o-down"></i></button></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col text-center">
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
                                        </div><button class="btn btn-primary" type="button" style="height: 42px;width: 94px;margin: 8px 30px;background: #E75C25;border-color: #E75C25;" data-toggle="modal" data-target="#exampleModal">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer text-center"><span>Copyright ©IROKI 2021</span></footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>