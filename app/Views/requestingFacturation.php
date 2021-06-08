<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Consultar factura</title>
<?= $this->endSection()?>
<?= $this->section('content')?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
   <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Facturas <small>consulta</small></h2>
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

       

        <div class="table-responsive">

          <form>
           <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name" name="last-name" required="required" class="form-control">
            </div>
            <button class="btn btn-success"><i class="fa fa-search"></i></button>
          </div>
        </form>
        
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th>
                <input type="checkbox" id="check-all" class="flat">
              </th>
              <th class="column-title">Id</th>
              <th class="column-title">Fecha</th>
              <th class="column-title">Nombre de la empresa</th>
              <th class="column-title">N. Pedido</th>
              <th class="column-title">RFC</th>
              <th class="column-title">Direccion</th>
              <th class="column-title no-link last"><span class="nobr">Accion</span>
              </th>
              
            </tr>
          </thead>

          <tbody>
            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">1</td>
              <td class=" ">2019/20/11</td>
              <td class=" ">PulserasMX<i class="success fa fa-long-arrow-up"></i></td>
              <td class=" ">3535</td>
              
              <td class=" ">CAR83983838C</td>
              <td class=" ">CDMX, los reyez 1097</td>
              <td class=" ">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                <button class="btn btn-info"><i class="fa fa-print"></i></button>
              </td>
              
            </td>
          </tr>
          
          <tr class="even pointer">
            <td class="a-center ">
              <input type="checkbox" class="flat" name="table_records">
            </td>
            <td class=" ">2</td>
            <td class=" ">2019/20/11</td>
            <td class=" ">CollaresMx<i class="success fa fa-long-arrow-up"></i></td>
            <td class=" ">35353</td>
            
            <td class=" ">CYT438483482</td>
            <td class=" ">CDMX, los reyez 1097</td>
            <td class=" ">
              <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
              <button class="btn btn-info"><i class="fa fa-print"></i></button>
            </td>
            
          </td>
        </tr>
        <tr class="even pointer">
          <td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
          </td>
          <td class=" ">3</td>
          <td class=" ">2020/20/11</td>
          <td class=" ">BotasCocodriloMx<i class="success fa fa-long-arrow-up"></i></td>
          <td class=" ">35235</td>
          
          <td class=" ">BTR355335353U</td>
          <td class=" ">CDMX, los reyez 1097</td>
          <td class=" ">
            <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            <button class="btn btn-info"><i class="fa fa-print"></i></button>
          </td>
          
        </td>
      </tr>
      
      
    </tbody>
  </table>
</div>


</div>
</div>
</div>
</div>
<br/>



</div>
</div>
<!-- /page content -->

<?=$this->endSection()?>