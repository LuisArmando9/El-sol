<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Crear producto</title>
<?= $this->endSection()?>
<?= $this->section('content')?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Formulario  <small>registro de productos</small></h2>
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
          <form action=<?=base_url('CreatingProduct')?> method="post" enctype="multipart/form-data"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            <div class="item form-group">
              <label   class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nombre <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" required="required" class="form-control " name="Name">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Código <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="last-name" name="Code" required="required" class="form-control"  >
              </div>
            </div>
      
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Estado <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
               <select id="heard" class="form-control" name="State" required>
                <option value="ACTIVE">Activo</option>
                <option value="NON-ACTIVE">No Activo</option>
                
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Categoria <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
             <select id="heard" class="form-control" name="Category" required>
              <option value="PULSERAS">Pulseras</option>
              <option value="CARTERAS">Carteras</option>
              
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Inventario <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <select id="heard" class="form-control" name="Inventory" required>
              <option value="INVENTORY-MANAGEMENT" >Manejo de Inventario</option>
              <option value="NOT-INVENTORY-MANAGEMENT">No manejar inventario</option>
              
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Stock<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" name="Stock" required="required" class="form-control">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Stock minimo<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" name="MinimumStock" required="required" class="form-control">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align"  for="last-name">Tipo de IVA<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <select id="heard" class="form-control" name="IvaType" required>
              <option value="ACTIVE">Activo</option>
              <option value="NON-ACTIVE">No Activo</option>
              
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name" >Porcentaje del IVA <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" name="Iva" required="required" class="form-control">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Costo por unidad<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" name="PricePerUnit" required="required" class="form-control">
          </div>
        </div>
        <div class="item form-group">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Descripcion<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" name="Description" required="required" class="form-control">
          </div>
        </div>
        <div class="item form-group">
          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Imagen</label>
          <div class="col-md-6 col-sm-6 ">
           
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" name="file" data-edit="insertImage" />
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="item form-group">
          <div class="col-md-6 col-sm-6 offset-md-3">
            
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
        </div>
        <?php if(isset($validator)):?>
          <div class="alert alert-danger"><?= $validator->listErrors()  ?></div>
        <?php endif;?>

              <?php if(isset($success)):?>
                  <div class="alert alert-danger"><?= $success  ?></div>
              <?php endif;?>




      </form>
    </div>
  </div>
</div>
</div>
<br/>



</div>
</div>
<!-- /page content -->
<?=$this->endSection()?>