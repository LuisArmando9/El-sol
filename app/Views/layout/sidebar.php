<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-flash"></i> <span>El Sol</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src=<?= session()->Photo ?> alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido</span>
              <h2><?= session()->FullName ?></h2>
              <h2><?= session()->Rol ?></h2>
            </div>

          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/sol/public/Dashboard"><i class="fa fa-home"></i> Home </a></li>
                <li><a><i class="fa fa-inbox"></i> Productos <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href=<?= base_url('viewToCreateProduct') ?>>Registro </a></li>
                    <li><a href=<?= base_url("viewToRequestProduct") ?>>Consulta</a></li>


                  </ul>
                </li>
                <?php if (session()->IsAdmin) : ?>
                  <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href=<?= base_url('viewToRequestUser') ?>>Disponibles</a></li>
                    </ul>
                  </li>
                <?php endif ?>
                <li><a><i class="fa fa-male"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href=<?= base_url('viewToCreateCustomer') ?>>Registro </a></li>
                    <li><a href=<?= base_url('viewToRequestCustomer') ?>>Consulta</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> Provedores <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href=<?= base_url('viewToCreateVendor') ?>>Registro </a></li>
                    <li><a href=<?= base_url('viewToRequestVendor') ?>>Consulta</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-line-chart"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/sol/public/CGSale">Registrar</a></li>
                    <li><a href="/sol/public/RqtsSale">Consultar</a></li>


                  </ul>
                </li>
                <li><a href="/sol/public/report"><i class="fa fa-file-pdf-o"></i>Reportes <span class="fa fa-chevron-down"></span></a></li>
                <li><a><i class="fa fa-file-archive-o"></i>Facturacion <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/sol/public/CGFacturation">Crear</a></li>
                    <li><a href="/sol/public/RqtsFacturation">Consultar</a></li>
                  </ul>
                </li>
                <li><a href="/sol/public/inventory"><i class="fa fa-inbox"></i> Iventario <span class="fa fa-chevron-down"></span></a></li>
              </ul>
            </div>
            </ul>
          </div>


        </div>
        <!-- /sidebar menu -->