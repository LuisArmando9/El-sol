<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Reporte</title>
<?= $this->endSection()?>
<?= $this->section('content')?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Generador  <small>reportes mensuales</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-4 col-sm-6  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Estadistica<small>ventas por</small></h2>
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
            <canvas id="lineChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Mayores ventas</h2>
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
            <canvas id="mybarChart"></canvas>
          </div>
        </div>
      </div>

      

      

      

      <div class="col-md-4 col-sm-6  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Exportar reporte del mes</h2>
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
            <button  class="btn btn-info"><i class="fa fa-file-pdf-o"></i></button>
            <button class="btn btn-info"><i class="fa fa-file-excel-o"></i></button>
            <button class="btn btn-info"><i class="fa fa-file-archive-o"></i></button>
            <button class="btn btn-info"><i class="fa fa-print"></i></button>
            
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <br />
  </div>
</div>
<!-- /page content -->
<?=$this->endSection()?>