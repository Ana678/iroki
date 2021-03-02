@extends('layouts.main')

@section('title', 'Dashboard - Brand')

@section('content')
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
                                        <div class="modal-footer justify-content-center">
                                            <button class="btn btn-warning" data-dismiss="modal" style="border-color: #e75c25;background: #e75c25;" type="button">Voltar</button>
                                            <button class="btn btn-warning" data-dismiss="modal" style="background: #e75c25;border-color: #e75c25;" type="button">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-sm float-right d-sm-inline-block" role="button" style="color: rgb(57,42,42);border-radius: 100%;margin-top: -5px;width: 31px;background: #e75c25;border-color: #e75c25;" data-toggle="modal" data-target="#exampleModal-1"><i class="icon ion-android-add fa-sm" style="color: rgb(255,255,255);"></i></a>
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
@endsection