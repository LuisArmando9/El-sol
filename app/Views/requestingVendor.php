<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Consultar proveedor</title>
<?= $this->endSection()?>
<?= $this->section('content')?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
   <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Clientes <small>registrados</small></h2>
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
              <th class="column-title">Nombre de la empresa</th>
              <th class="column-title">Correo de la empresa</th>
              <th class="column-title">Teléfono de la empresa</th>
              <th class="column-title">Direccion de la empresa</th>
              <th class="column-title">Nombre del representante</th>
              <th class="column-title">Correo del representante</th>
              <th class="column-title no-link last"><span class="nobr">Acción</span>
              </th>

            </tr>
          </thead>

          <tbody>
            <tr class="even pointer">
              <td class="a-center ">
                <input type="checkbox" class="flat" name="table_records">
              </td>
              <td class=" ">1</td>
              <td class=" ">Las pulseras mx</td>
              <td class=" ">pulserasmx@pulserasmx.com <i class="success fa fa-long-arrow-up"></i></td>
              <td class=" ">2532632632</td>
              <td class=" ">CDMX, los reyez ·1097</td>
              <td class=" ">Marco Antonio Perez</td>
              <td class=" ">marcoperez@pulserasmx.com</td>
              <td class=" ">
                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </td>

            </td>
          </tr>

          <tr class="even pointer">
            <td class="a-center ">
              <input type="checkbox" class="flat" name="table_records">
            </td>
            <td class=" ">1</td>
            <td class=" ">Las botas mx</td>
            <td class=" ">pulserasmx@botasmx.com <i class="success fa fa-long-arrow-up"></i></td>
            <td class=" ">2532632632</td>
            <td class=" ">CDMX, los reyez ·1097</td>
            <td class=" ">Fernando Antonio Perez</td>
            <td class=" ">fernando@botasmx.com</td>
            <td class=" ">
              <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </td>

          </td>
        </tr>
        <tr class="even pointer">
          <td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
          </td>
          <td class=" ">1</td>
          <td class=" ">Las collares mx</td>
          <td class=" ">collaresmx@pulserasmx.com <i class="success fa fa-long-arrow-up"></i></td>
          <td class=" ">2532632632</td>
          <td class=" ">CDMX, los reyez ·1097</td>
          <td class=" ">Venancio Antonio Perez</td>
          <td class=" ">Venancio123@collaresmx.com</td>
          <td class=" ">
            <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-pencil"></i></button>
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

<?= $this->endSection()?>