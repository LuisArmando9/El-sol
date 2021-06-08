<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Crear venta</title>
<?= $this->endSection()?>
<?= $this->section('content')?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Registro de una venta</h3>
      </div>

      
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="col-md-6 col-sm-6  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Lista de  <small>productos</small></h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group ">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" placeholder="type its product ID" class="form-control ">

                </div>

              </div>
              
              
              

            </form>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Costo por unidad</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Botas de cocodrilo</td>
                  <td>$137</td>
                  <td>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <input type="checkbox" id="first-name"  checked="true">
                      </div>
                    </form>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Pulsera oro</td>
                  <td>$1829</td>
                  <td>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <input type="checkbox" id="first-name"  checked="true">
                      </div>
                    </form>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Anillos de plata</td>
                  <td>$1231</td>
                  <td>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <input type="checkbox" id="first-name"  checked="true">
                      </div>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>


      <div class="col-md-6 col-sm-6  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Informacion  de la compra</h2>
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

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Costo</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pulsera de oro</td>
                  <td>1</td>
                  <td>$1829</td>
                  <td>$1829</td>
                  <td>
                    <button class="btn btn-danger"><i class="fa fa-close"></i></button>
                  </td>
                </tr>
                
              </tbody>
            </table>
            <div class="clearfix"></div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" colspan="4">Subtotal:</th>
                  <th scope="row" colspan="1">$1829</th>
                </tr>
                <tr>
                  <th scope="row" colspan="4">$0</th>
                  <th scope="row" colspan="1"></th>
                </tr>
                <tr>
                  <th scope="row" colspan="4">Total de compra:</th>
                  <th scope="row" colspan="1">$1829</th>
                </tr>
                
              </tbody>
            </table>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID factura <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Proveedor<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                 <select id="heard" class="form-control" required>
                  <option value="">Seleccione un proveedor</option>
                  
                  
                </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Observaciones<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
               <textarea></textarea>
             </div>
           </div>
           
           
           
           
           
           <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha de compra <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
              <script>
                function timeFunctionLong(input) {
                  setTimeout(function() {
                    input.type = 'text';
                  }, 60000);
                }
              </script>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button class="btn btn-primary" type="button">Guardar</button>
              <button class="btn btn-danger" type="reset">Cancelar</button>
              
            </div>
          </div>

        </form>


      </div>
    </div>
  </div>

  
</div>
</div>
</div>
<!-- /page content -->

<?=$this->endSection()?>