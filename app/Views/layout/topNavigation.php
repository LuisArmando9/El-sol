 
       <!-- menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="Home/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav"> <div class="nav_menu"> <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div> <nav
        class="nav navbar-nav"> <ul class=" navbar-right"> <li
        class="nav-item dropdown open" style="padding-left: 15px;"> <a
        href="javascript:;" class="user-profile dropdown-toggle"
        aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown"
        aria-expanded="false"> <img src="production/images/img.jpg"
        alt=""><?= session()->UserName?> </a> <div class="dropdown-menu
        dropdown-usermenu pull-right" aria-labelledby="navbarDropdown"> <a
        class="dropdown-item"  href="javascript:;"> Profile</a> <a
        class="dropdown-item"  href="javascript:;"> <span class="badge bg-red
        pull-right">50%</span> <span>Settings</span> </a> <a
        class="dropdown-item"  href="javascript:;">Help</a> <a
        class="dropdown-item"  href="Home/logout"><i class="fa fa-sign-out
        pull-right"></i> Log Out</a> </div> </li>
  
                 
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->