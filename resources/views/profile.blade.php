@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4"><strong>Informações Pessoais</strong></h3>
        <div class="row mb-3">
            <div class="col-lg-4" style="margin-top: 16px;">
                <div class="card mb-3">
                    <div class="card-body text-center shadow">
                        <img class="rounded-circle mb-3 mt-4" src="assets/img/avatars/{{$sessao->profile_photo_path}}" width="160" height="160">
                        <div class="mb-3">
                            <form action="updateProfileImage" name="photo" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label class="btn btn-primary btn-sm" style="background: #e75c25;border-color: #e75c25;border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;">
                                    Alterar Imagem De Perfil
                                    <input class="d-none" type="file" name="image" onchange="document.forms['photo'].submit()">
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row" style="margin-top: 16px;">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3"></div>
                            <div class="card-body">
                                <form action="updateProfileDados" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="username"><strong>Nome</strong></label>
                                                <input class="form-control" type="text" id="username-1" placeholder="John" name="name" value="{{$sessao->name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email"><strong>Email</strong></label>
                                                <input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" value="{{$sessao->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center"><button class="btn btn-primary btn-sm" type="submit" style="background: #e75c25;border-color: #e75c25;">Editar Dados</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3" style="margin-top: 16px;">
            <div class="col-xl-4" style="margin-top: 16px;">
                <div class="card align-items-center" style="border-color: transparent;background: transparent;">
                    <div class="card-body text-center shadow"><img class="mb-3 mt-4 img-no-padding img-responsive img-fluid" src="assets/img/depositphotos_50696813-stock-photo-family-playing-soccer-in-park.jpg">
                        <div class="mb-3">
                            <label class="btn btn-primary btn-sm" style="background: #e75c25;border-color: #e75c25;border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;">
                                 Alterar Imagem Da Família
                                 <input class="d-none" type="file" name="arquivo" />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-8">
                <div class="row mb-3" style="margin-top: 16px;">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold" style="color: #e75c25!important;">Sua Família</p>
                            </div>
                            <div class="card-body" style="margin: 10px;">
                                <form>
                                    <div class="form-row" style="margin: 6px -5px;">
                                        <div class="col text-center"><label class="col-form-label" for="username"><img class="rounded-circle" src="assets/img/dogs/image2.jpeg" width="25" height="25" style="margin-right: 10px;"><strong>José Vicktor</strong></label></div>
                                        <div class="col-lg-6 offset-lg-5 text-center mx-auto"><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pencil" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                </svg></button><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-person-dash" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                                </svg></button></div>
                                    </div>
                                    <div class="form-row" style="margin: 6px -5px;">
                                        <div class="col text-center"><label class="col-form-label" for="username"><img class="rounded-circle" src="assets/img/dogs/image2.jpeg" width="25" height="25" style="margin-right: 10px;"><strong>José Vicktor</strong></label></div>
                                        <div class="col-lg-6 offset-lg-5 text-center mx-auto"><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pencil" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                </svg></button><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-person-dash" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                                </svg></button></div>
                                    </div>
                                    <div class="form-row" style="margin: 6px -5px;">
                                        <div class="col text-center"><label class="col-form-label" for="username"><img class="rounded-circle" src="assets/img/dogs/image2.jpeg" width="25" height="25" style="margin-right: 10px;"><strong>José Vicktor</strong></label></div>
                                        <div class="col-lg-6 offset-lg-5 text-center mx-auto"><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pencil" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                </svg></button><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;border-color: #e75c25;background: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-person-dash" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                                </svg></button></div>
                                    </div>
                                    <div class="form-row" style="margin: 6px -5px;">
                                        <div class="col text-center"><label class="col-form-label" for="username"><img class="rounded-circle" src="assets/img/dogs/image2.jpeg" width="25" height="25" style="margin-right: 10px;"><strong>José Vicktor</strong></label></div>
                                        <div class="col-lg-6 offset-lg-5 text-center mx-auto"><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pencil" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                </svg></button><button class="btn btn-primary btn-sm" type="submit" style="margin: 7px 20px;padding: 2px 6px;background: #e75c25;border-color: #e75c25;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-person-dash" style="font-size: 12px;">
                                                    <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                                </svg></button></div>
                                    </div>
                                </form>
                                <div class="text-center mb-3" style="margin-top: 15px;"><button class="btn btn-primary btn-sm" type="button" style="background: #e75c25;border-color: #e75c25;">Adicionar Membro</button></div>
                                <div class="mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection