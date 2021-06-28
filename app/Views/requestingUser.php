<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Consultar cliente</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Usuarios <small>registrados</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="table-responsive">

                        <form>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nombre <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="last-name" name="last-name" required="required" class="form-control">
                                </div>
                                <button class="btn btn-success"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <a class="btn btn-success" href=<?= base_url('viewToCreateUser') ?> style="color:white;"><i class="fa fa-user"></i> Crear Usuario</a>
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title"><span class="nobr">Foto</span>
                                    </th>
                                    <th class="column-title">Nombre</th>
                                    <th class="column-title">Correo </th>
                                    <th class="column-title">Teléfono</th>

                                    <th class="column-title no-link last"><span class="nobr">Acción</span>
                                    </th>
                                    

                                </tr>
                            </thead>

                            <tbody>
                                <?php if (!empty($data)) : ?>
                                    <?php foreach ($data as $item) : ?>
                                        <tr class="even pointer">
                                            <td>
                                                <img src= <?= $item->Photo?> width="60" height="60" style="border-radius:100px;">
                                            </td>
                                            <td><?= $item->FullName ?></td>
                                            <td><?= $item->Email ?></td>
                                            <td><?= $item->Phone ?></td>
                                            <td>
                                                <a href=<?= base_url("viewToUpdateUser") . "/" . $item->idUser ?> class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href=<?= base_url("DeletingUser") . "/" . $item->idUser ?> class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>

                                <?php endif ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br />

</div>
</div>
<!-- /page content -->
<?= $this->endSection() ?>