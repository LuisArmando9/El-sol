<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Crear producto</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Formulario <small>crear usuarios</small></h2>
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

          <br />
          <form action=<?= base_url('CreatingUser') ?> method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nombre Completo <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" required="required" class="form-control " name="FullName">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nombre de Usuario <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="last-name" name="UserName" required="required" class="form-control">
              </div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Tipo <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <select id="heard" class="form-control" name="Type" required>
                  <option value="ADMIN">Administrador</option>
                  <option value="NON-ADMIN">No Administrador</option>

                </select>
              </div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Correo<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="email" id="last-name" name="Email" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Contraseña<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="password" id="last-name" name="Password" required="required" class="form-control">
              </div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Confirma la contraseña <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="password" id="last-name" name="ConfirmPassword" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Teléfono <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="last-name" name="Phone" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">

              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Imagen</label>
              <div class="col-md-6 col-sm-6 ">
                <div class="custom-file">
                  <input id="updatingfile" type="file" data-role="magic-overlay" data-target="#pictureBtn" name="Photo" data-edit="insertImage" class="custom-file-input" required>
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feeback</div>
                </div>
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3" id="insertImage">
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
              <div class="alert alert-danger"><?= $invalidInsert  ?></div>
            <?php endif; ?>





          </form>
        </div>
      </div>
    </div>
  </div>
  <br />



</div>
</div>
<!-- /page content -->
<?= $this->endSection() ?>