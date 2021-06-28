<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Crear Proveedor</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Formulario <small>actualizar el proveedor</small></h2>
          <ul class="nav navbar-right panel_toolbox">
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
          <?php if (isset($data)) : ?>
            <br />
            <form action=<?= base_url('UpdatingVendor')."/".$data['idProvider'] ?> method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nombre de la empresa <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" class="form-control " value=<?=$data['BusinessName']?> name="BusinessName">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Dirección <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="Address" required="required" value='<?=$data['Address']?>'class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Página web<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="WebPage" required="required" value='<?=$data['WebPage']?>'   class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nombre del representante de la empresa<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="AgentNameOfBusiness"  value='<?=$data['AgentNameOfBusiness']?>' required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Teléfono de la empresa<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="BusinessPhoneNumber" value=<?=$data['BusinessPhoneNumber']?>  required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Correo del representante de la empresa<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="AgentEmail" value=<?=$data['AgentEmail']?> required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Teléfono del representante de la empresa<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="AgentPhone"  value=<?=$data['AgentPhone']?> required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">RFC<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="RFC" value=<?=$data['RFC']?> required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Correo de la empresa<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="BusinessEmail" value=<?=$data['BusinessEmail']?> required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">

                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Imagen</label>
                <div class="col-md-6 col-sm-6 ">
                  <div class="custom-file">
                    <input id="updatingfile" type="file" data-role="magic-overlay" data-target="#pictureBtn" name="Photo" data-edit="insertImage" class="custom-file-input">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feeback</div>
                  </div>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3" id="insertImage">
                   <img width="200px" height="200" style="border-radius:100px;"  src=<?=App\Controllers\Constant\FileConstant::PATH_TO_VENDOR_IMAGES_TO_LOCALHOST. $data['Photo']?>>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">

                  <button type="submit" class="btn btn-success">Registrar</button>
                </div>
              </div>
              <?php if (isset($validator)) : ?>
                <div class="alert alert-danger"><?= $validator->listErrors()  ?></div>
              <?php endif; ?>
              <?php if (isset($invalidInsert)) : ?>
                <div class="alert alert-danger"><?= $invalidInsert ?></div>
              <?php endif; ?>

            </form>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
  <br />



</div>
</div>
<!-- /page content -->

<?= $this->endSection() ?>