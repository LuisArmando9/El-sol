<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Actualizar producto</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Formulario <small>de actualización</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li>
              <form>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Código <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="last-name" class="form-control">
                  </div>
                </div>
              </form>
            </li>
            <li><button class="btn btn-success"><i class="fa fa-search"></i></button></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a class="dropdown-item" href="#">Settings 1</a>
                </li>
                <li><a class="dropdown-item" href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <br />
          <?php if (!empty($data)) : ?>
            <form id="demo-form2" enctype="multipart/form-data" method="post" action=<?= base_url('UpdatingProduct') . "/" . $data['idProduct'] ?> data-parsley-validate class="form-horizontal form-label-left">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nombre <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control " name="Name" value='<?= $data['Name'] ?>'>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Código <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="Code" value=<?= $data['Code'] ?> class="form-control">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Estado <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select id="heard" class="form-control" name="State">
                    <option value="" selected disabled hidden>Elige uno opción</option>
                    <option value="ACTIVE">Activo</option>
                    <option value="NON-ACTIVE">No Activo</option>

                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Categoria <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select id="heard" class="form-control" name="Category">
                    <option value="" selected disabled hidden>Elige uno opción</option>
                    <option value="PULSERAS">Pulseras</option>
                    <option value="CARTERAS">Carteras</option>

                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Inventario <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select id="heard" class="form-control" name="Inventory" value="NOT-INVENTORY-MANAGEMENT">
                    <option value="" selected disabled hidden>Elige uno opción</option>
                    <option value="INVENTORY-MANAGEMENT">Manejo de Inventario</option>
                    <option value="NOT-INVENTORY-MANAGEMENT">No manejar inventario</option>

                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Stock<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="Stock" class="form-control" value=<?= $data['Stock'] ?>>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Stock minimo<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="MinimumStock" class="form-control" value=<?= $data['MinimumStock'] ?>>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">IVA<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select id="heard" class="form-control" name="IvaType">
                    <option value="" selected disabled hidden>Elige uno opción</option>
                    <option value="ACTIVE">Activo</option>
                    <option value="NON-ACTIVE">No Activo</option>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Porcentaje del IVA <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="Iva" value=<?= $data['Iva'] ?> required="required" class="form-control">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Costo por unidad<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="PricePerUnit" value=<?= $data['PricePerUnit'] ?> class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descripcion<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea type="text" id="last-name" name="Description" class="form-control">
                    <?= trim($data['Description']) ?>
                  </textarea>
                </div>
              </div>
              <div class="item form-group">

                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Imagen</label>
                <div class="col-md-6 col-sm-6 ">
                  <div class="custom-file">
                    <input id="updatingfile" type="file" data-role="magic-overlay" data-target="#pictureBtn" name="Path" data-edit="insertImage" class="custom-file-input">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feeback</div>
                  </div>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3" id="insertImage">
                  <img src=<?= App\Controllers\Constant\FileConstant::PATH_TO_PRODUCT_IMAGES_TO_LOCALHOST.$data['Path'] ?> width="200" height="200" />
                </div>
              </div>


              <div class="ln_solid"></div>

              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">

                  <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
              </div>
              <?php if (isset($validator)) : ?>
                <div class="alert alert-danger"><?= $validator->listErrors()  ?></div>
              <?php endif; ?>
              <?php if (isset($invalidInsert)) : ?>
                <div class="alert alert-danger"><?= $invalidInsert ?></div>
              <?php endif; ?>

            </form>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <br />



</div>
</div>
<!-- /page content -->

<?= $this->endSection() ?>