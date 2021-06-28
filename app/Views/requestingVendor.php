<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Consultar proveedor</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Provedores <small>registrados</small></h2>
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
            <a class="btn btn-success" style="color:white" href=<?= base_url('viewToCreateVendor') ?>><i class="fa fa-user"></i> Agregar nuevo provedor</a>
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">

                  <th class="column-title">Nombre de la empresa</th>
                  <th class="column-title">Correo de la empresa</th>
                  <th class="column-title">Teléfono de la empresa</th>
                  <th class="column-title">Direccion de la empresa</th>
                  <th class="column-title">RFC</th>
                  <th class="column-title">Acciones</th>
                  <th class="column-title no-link last"><span class="nobr">Foto</span>
                  </th>

                </tr>
              </thead>

              <tbody>

                <?php if (!empty($data)) : ?>
                  <?php foreach ($data as $item) : ?>
                    <tr class="even pointer">
                      <td><?= $item->BusinessName ?></td>
                      <td><?= $item->BusinessEmail ?></td>
                      <td><?= $item->BusinessPhoneNumber ?></td>
                      <td><?= $item->Address ?></td>
                      <td><?= $item->RFC ?></td>
                      <td>
                        <a href=<?= base_url("viewToUpdateVendor") . "/" . $item->idProvider  ?> class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href=<?= base_url("DeletingVendor") . "/" . $item->idProvider  ?> class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                      <th>
                        <img width="60" height="60" src=<?= $item->Photo ?> style="border-radius: 100px;">
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
  </div>
  <br />



</div>
</div>
<!-- /page content -->

<?= $this->endSection() ?>