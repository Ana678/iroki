

<?php $__env->startSection('title', 'Table - Brand'); ?>

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\iroki\resources\views/categoryDetailM.blade.php ENDPATH**/ ?>