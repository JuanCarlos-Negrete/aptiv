  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Prototipos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/dashboard.php', 'content-wrapper')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu Principal
              </p>
            </a>
          </li>     

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Alta de Componentes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/alta_cables.php', 'content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cables</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/alta_housing.php', 'content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Familias</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/alta_leads.php', 'content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leads</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/instrucciones.php', 'content-wrapper')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Instrucciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Otro
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Otro
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script type="text/javascript">
      $(".nav-link").on('click', function(){
        $(".nav-link").removeClass('active');
        $(this).addClass('active');
      })
  </script>