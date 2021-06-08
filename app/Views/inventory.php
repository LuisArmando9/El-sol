<?= $this->extend('layout/main') ?>
<?=$this->section('title')?>
<title>Inventario</title>
<?=$this->endSection()?>
<?=$this->section('content')?>

      <!-- page content -->
      <div class="right_col" role="main">
       <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tabla <small>inventario</small></h2>
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

                  <button class="btn btn-info"><i class="fa fa-file-excel-o"></i> Exportar</button>
                  <button class="btn btn-info"><i class="fa fa-plus"></i> Agregar producto</button>
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th>
                            <input type="checkbox" id="check-all" class="flat">
                          </th>
                          <th class="column-title">ID </th>
                          <th class="column-title">Descripcion</th>
                          <th class="column-title">Stock </th>
                          <th class="column-title">Costo
                          </th>
                          <th class="column-title">Costo
                          Total </th>
                          
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">1</td>
                          <td class=" ">Son pulsera con muchos diamantes</td>

                          <td class=" ">10</td>
                          <td class=" ">400</td>
                          <td class="a-right a-right ">$4000</td>

                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">2</td>
                          <td class=" ">Cinturones</td>

                          <td class=" ">100</td>
                          <td class=" ">400</td>
                          <td class="a-right a-right ">$40000</td>

                        </tr>
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">3</td>
                          <td class=" ">Botas de piel de cocodrilo</td>

                          <td class=" ">1000</td>
                          <td class=" ">400</td>
                          <td class="a-right a-right ">$400000</td>

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
<?=$this->endSection()?>