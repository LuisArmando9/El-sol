<?= $this->extend('layout/main') ?>
<?= $this->section('title') ?>
<title>Crear usario</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Formulario <small>nuevo cliente</small></h2>
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
          <form id="demo-form2"  action=<?=base_url('CreatingCustomer')?> method="Post" data-parsley-validate class="form-horizontal form-label-left">

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nombre Completo <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" required="required" name="FullName" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Teléfono<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="last-name" name="Phone" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="email" id="last-name" name="Email" required="required" class="form-control">
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
</div>
</div>
<!-- /page content -->
<!-- /page content -->

<?= $this->endSection() ?>