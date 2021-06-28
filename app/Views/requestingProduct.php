<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Consultar Producto</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Consulta </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="btn btn-info" href=<?= base_url("viewToCreateProduct") ?>><i class="fa fa-plus"> </i> Agregar nuevo producto</a>
            </li>
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
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30">
                  Puedes exportar en los siguientes formatos disponibles
                </p>
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>Costo por unidad</th>
                      <th>Stock</th>
                      <th>Fecha de registro</th>
                      <th>Acciones</th>
                      <th>Foto</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($data)) : ?>
                      <?php foreach ($data as $item) : ?>
                        <tr>
                          <td><?= $item->Name ?></td>
                          <td><?= $item->Description ?></td>
                          <td><?= $item->PricePerUnit ?></td>
                          <td><?= $item->Stock ?></td>
                          <td><?= $item->CreateAt ?></td>
                          <td>
                            <a href=<?= base_url("viewToUpdateProduct") . "/" . $item->idProduct ?> class="btn btn-success"><i class="fa fa-pencil"></i></a>
                            <a href=<?= base_url("DeletingProduct") . "/" . $item->idProduct ?> class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                          <th>
                          <img width="60" height="60" src=<?= $item->Path?> style="border-radius: 100px;">
                          </th>
                        </tr>
                      <?php endforeach ?>

                    <?php endif ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <br />



      </div>
    </div>
    <!-- /page content -->

    <?= $this->endSection() ?>