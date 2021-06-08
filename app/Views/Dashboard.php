
<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>main</title>
<?= $this->endSection()?>
<?= $this->section('content')?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="row" style="display: inline-block;">
    <div class=" top_tiles" style="margin: 10px 0;">
      <div class="col-md-3 col-sm-3  tile">
        <span>Total de Ventas</span>
        <h2>233</h2>
        <span class="sparkline_one" style="height: 160px;">
          <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
        </span>
      </div>
      <div class="col-md-3 col-sm-3  tile">
        <span>Total ingresos</span>
        <h2>$ 231,809</h2>
        <span class="sparkline_one" style="height: 160px;">
          <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
        </span>
      </div>
      
      
    </div>
  </div>
  <br/>


  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="dashboard_graph x_panel">
        <div class="x_title">
          <div class="col-md-6">
            <h3>Grafico de ventas </h3>
          </div>
          <div class="col-md-6">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
            </div>
          </div>
        </div>
        <div class="x_content">
          <div class="demo-container" style="height:250px">
            <div id="chart_plot_03" class="demo-placeholder"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4 col-sm-6 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Productos menos vendidos</h2>
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
          <canvas id="canvasDoughnut"></canvas>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 ">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Productos mas vendidos</h2>
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
          <table class="" style="width:100%">
            <tr>
              <th style="width:37%;">
                <p>5 mejores</p>
              </th>
              <th>
                <div class="col-lg-7 col-md-7 col-sm-7 ">
                  <p class="">Articulo</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 ">
                  <p class="">Progress</p>
                </div>
              </th>
            </tr>
            <tr>
              <td>
                <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
              </td>
              <td>
                <table class="tile_info">
                  <tr>
                    <td>
                      <p><i class="fa fa-square blue"></i>Botas de piel </p>
                    </td>
                    <td>30%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>Collar </p>
                    </td>
                    <td>10%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square purple"></i>Cartera </p>
                    </td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square aero"></i>Bolso </p>
                    </td>
                    <td>15%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square red"></i>Puseras </p>
                    </td>
                    <td>30%</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 ">
      <div class="x_panel fixed_height_320">
        <div class="x_title">
          <h2>Capacidad de Alamacen</h2>
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
          <div class="dashboard-widget-content">
            <ul class="quick-list">
              <li><i class="fa fa-cicle"></i><a href="#">Productos faltantes</a></li>
              <li><i class="fa fa-bookmark"></i><a href="#">Botas de cocodrilo</a></li>
              <li><i class="fa fa-bookmark"></i><a href="#">Pulseras</a></li>
              <li><i class="fa fa-bookmark"></i><a href="#">Carteras</a></li>
              <li><i class="fa fa-bookmark"></i><a href="#">Aretes</a></li>
              
            </ul>

            <div class="sidebar-widget">
              <h4>Profile Completion</h4>
              <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
              <div class="goal-wrapper">
                <span id="gauge-text" class="gauge-value gauge-chart pull-left">0</span>
                <span class="gauge-value pull-left">%</span>
                <span id="goal-text" class="goal-value pull-right">100%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>
</div>
<!-- /page content -->
<?= $this->endSection() ?>