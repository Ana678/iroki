@extends('layouts.main')

@section('title', 'Table - Brand')

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4"><strong>Detalhes da Categoria: {{$category->name}}</strong></h3>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th class="text-left">Produto</th>
                                <th>Quantidade</th>
                                <th>Descrição</th>
                                @if($sessao->master == 1)
                                    <th class="text-center" style="width: 118px;">Comprei</th>
                                    <th class="text-center" style="width: 118px;">Desnecessário</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="text-left">{{$product->name}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->description}}</td>
                                    @if($sessao->master == 1)
                                    <form action="/editProduct/{{$product->id}}" method="POST">
                                        @csrf
                                        <td class="text-center" style="width: 109px;">
                                            <button class="btn btn-primary" 
                                                    type="submit"
                                                    name="button"
                                                    value="bought"
                                                    style="background: #E75C25;border-color: #E75C25;"
                                            >
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-primary" 
                                                type="submit"
                                                name="button"
                                                value="unnecessary"
                                                style="background: #E75C25;border-color: #E75C25;"
                                            >
                                                <i class="fa fa-thumbs-o-down"></i>
                                            </button>
                                        </td>
                                    </form>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div id="modal-open">
                            <div class="modal fade" 
                                    role="dialog" 
                                    tabindex="-1" 
                                    id="exampleModal" 
                                    aria-labelledby="exampleModalLabel"
                            >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title" style="color: rgb(90,92,105);">
                                                <strong>Adicionar Produto</strong>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form action="/addProduct" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-row" style="margin: 15px -5px;">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="city">
                                                                <strong>Nome</strong>
                                                            </label>
                                                            <input class="form-control"
                                                                    type="text"
                                                                    id="name"
                                                                    placeholder="Feijão Preto"
                                                                    name="name"
                                                                    style="width: 100%;"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="country">
                                                                <strong>Quantidade</strong>
                                                            </label>
                                                            <input class="form-control" 
                                                                    type="number" 
                                                                    id="quantity" 
                                                                    placeholder="10" 
                                                                    min= "0"
                                                                    name="quantity" 
                                                                    style="width: 100%;"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin: 15px -5px;">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="city">
                                                                <strong>Categoria</strong>
                                                            </label>
                                                            <select class="form-control" 
                                                                    style="width: 100%;"
                                                                    name="category"
                                                            >
                                                                <optgroup label="Categorias">
                                                                    @foreach($modalCategories as $modalCategory)
                                                                        <option value="{{$modalCategory->id}}"
                                                                            @if($modalCategory->name == $category->name)
                                                                                selected
                                                                            @endif
                                                                        >
                                                                            {{$modalCategory->name}}
                                                                        </option>
                                                                    @endforeach
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="description">
                                                                <strong>Descrição</strong>
                                                            </label>
                                                            <input class="form-control" 
                                                                    type="text" 
                                                                    placeholder="Marca Fugini"
                                                                    id="description"
                                                                    name="description"
                                                                    style="width: 100%;"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button class="btn btn-warning" 
                                                    data-dismiss="modal" 
                                                    style="border-color: #e75c25;background: #e75c25;" 
                                                    type="button"
                                                    >
                                                Voltar
                                            </button>
                                            <button class="btn btn-warning" 
                                                    style="background: #e75c25;border-color: #e75c25;" 
                                                    type="submit"
                                                    name="screen"
                                                    value="categoryDetail"
                                                    >
                                                    Salvar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" 
                                    type="button" 
                                    style="height: 42px;width: 94px;
                                            margin: 8px 30px;
                                            background: #E75C25;border-color: #E75C25;"
                                    data-toggle="modal" 
                                    data-target="#exampleModal"
                            >
                                Adicionar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($errorMsg != '')
        <script>
            alert("{{$errorMsg}}");
        </script>
    @endif
@endsection