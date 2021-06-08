<?= $this->extend('layout/main') ?>
<?= $this->section('title')?>
<title>Consultar cliente</title>
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
              <th class="column-title">Nombre</th>
              <th class="column-title">Correo </th>
              <th class="column-title">Teléfono</th>
              
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
              <td class=" ">Maria Angelica Cortez Veles</td>
              <td class=" ">maria24@gmail.com <i class="success fa fa-long-arrow-up"></i></td>
              <td class=" ">2532632632</td>
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
            <td class=" ">2</td>
            <td class=" ">Luis Armando Hernandez Vazquez</td>
            <td class=" ">luisito2832sj@gmail.com <i class="success fa fa-long-arrow-up"></i></td>
            <td class=" ">2323848248383</td>
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
          <td class=" ">2</td>
          <td class=" ">Juan Salazar Tellez</td>
          <td class=" ">salazar@sol.com <i class="success fa fa-long-arrow-up"></i></td>
          <td class=" ">2323232933</td>
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
        <td class=" ">4</td>
        <td class=" ">Jorge Alberto Altamirano</td>
        <td class=" ">jorgais9283@sol.com <i class="success fa fa-long-arrow-up"></i></td>
        <td class=" ">2323232</td>
        <td class=" ">
          <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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