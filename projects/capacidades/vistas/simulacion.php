<!-- PAGINA SIMULACION-->    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Simulacion </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Simulacion</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

 <div class="row">
            <div class="col-lg-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"><b>Ingresa los datos solicitados:</b></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                          <i class="fas fa-times"></i>
                      </button>
                    </div> <!-- ./ end card-tools -->
                  </div> <!-- ./ end card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 d-lg-flex">

                      <div style="width: 25%" class="form-floating mx-1">
                        <label for="iptCable"><b>Turno:<b></label>
                        <div class="margin">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default"></button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                           <span class="sr-only">Toggle Dropdown</span>
                           </button>
                         <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                            <a class="dropdown-item" href="#">4</a>
                        <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Otro</a>
                    </div>
                  </div>
                </div>
                        
                      </div>
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptDescripccion"
                            class="form-control"
                            data-index="3">
                            <label for="iptDescripccion">Buscar por Descripccion</label>
                      </div>
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptProveedor"
                            class="form-control"
                            data-index="4">
                            <label for="iptProveedor">Buscar por Proveedor</label>
                      </div>
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptFecha"
                            class="form-control"
                            data-index="5">
                            <label for="iptFecha">Buscar por Fecha</label>
                      </div>
                  </div>
                    </div>
                  </div>
                </div> <!-- ./ end card-body -->
              </div>
            </div>  
        </div>

             
              <!-- /.card-body -->
            </div>
        <div class="row">
          <div class="col-lg-12">
            <table id="tbl_cables" class="table table-striped w-100 shadow">
                <thead class="bg-info"> 
                  <tr>
                    <th></th>
                    <th>ID</th>
                    <th>CABLE</th>
                    <th>DESCRIPCCION</th>
                    <th>PROVEEDOR</th>
                    <th>ALTA</th>
                    <th class="text-center">OPCIONES</th>
                  </tr>
                </thead>  
                  <tbody>
                  </tbody>
            </table>
          </div>
        </div>
        <div class="tab-loading">
        <div>
          <h2 class="display-4">Loading . . . <i class="fa fa-sync fa-spin"></i></h2>
        </div>
      </div>

      </div><!-- /.container-fluid -->
    </div>
      </div><!-- /.container-fluid -->

    <!-- /.content -->