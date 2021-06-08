<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Consultar venta</title>
<?= $this->endSection()?>
<?= $this->section('content')?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
   <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Consulta </h2>
        <ul class="nav navbar-right panel_toolbox">
         <li><button class="btn btn-info" ><i class="fa fa-plus"> </i>  Agregar nueva venta</button>
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
                  <th>ID</th>
                  <th>Descripcion</th>
                  <th>Total</th>
                  <th> Total de productos</th>
                  <th>Fecha de registro</th>
                  

                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>2314</td>
                  <td></td>
                  <td>$689</td>
                  <td>11</td>
                  <td>2011/04/25</td>
                  
                </tr>
                <tr>
                  <td>131414</td>
                  <td>Las pulseras estaban decoloridas</td>
                  <td>$2034</td>
                  <td>34</td>
                  <td>2011/04/25</td>
                  
                </tr>
                
                <tr>
                  <td>13134</td>
                  <td></td>
                  <td>$3689</td>
                  <td>3</td>
                  <td>2011/04/25</td>
                  
                </tr>
                
                <tr>
                  <td>131414</td>
                  <td>las pulseras eran mas grandes de lo normal</td>
                  <td>$56689</td>
                  <td>6183</td>
                  <td>2011/04/25</td>
                  
                </tr>
                
                <tr>
                  <td>13141</td>
                  <td></td>
                  <td>$12689</td>
                  <td>83</td>
                  <td>2011/04/25</td>
                  
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br/>


    
  </div>
</div>
<!-- /page content -->

<?= $this->endSection()?>