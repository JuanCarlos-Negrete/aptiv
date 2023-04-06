<!-- *-*-*-*-*-*- PAGINA SIMULACION *-*-*-*-*-*- -->   


<!-- PRINCIPAL BANNER --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Simulacion </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vistas/dashboard.php">Inicio</a></li>
              <li class="breadcrumb-item active">Simulacion</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- /.content -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <!--row para titulo de Parametros -->
        <div class="row">
            <div class="col-lg-12">
              <div class="card card-info">

                <div class="card-header">
                  <h2 class="card-title"><b>Parametros</b></h2>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool text-danger" id="btnLimpiarParametros">
                          <i class="fa fa-times-circle" ></i>
                      </button>
                    </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->


                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 d-lg-flex">

                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptCable"
                            class="form-control"
                            data-index="2">
                        <label for="iptCable">Buscar Cable</label>
                      </div>
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptCable"
                            class="form-control"
                            data-index="2">
                        <label for="iptCable">Buscar Cable</label>
                      </div>
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptCable"
                            class="form-control"
                            data-index="2">
                        <label for="iptCable">Buscar Cable</label>
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



                      <!--para hacer ENTER en los TEXTBOX hacia abajo -->
                       <div class="col-lg-4">

                      <div class="form-group mb-2">
                          <label class="" for="ipDescreg"><i class=""></i>
                              <span class="small">Descripccion:</span><span class="text-danger">*</span>
                          </label> 
                          <input type="text" class="form-control form-control-sm" id="ipDescreg"
                            name="ipDescreg" placeholder="Descripccion del Cable" required>
                          <div class="invalid-feedback">Ingrese la descripccion del cable</div>
                          <!--<span id="validate_desc" class="text-danger small fst-italic"
                              style="display:none">Debe ingresar la Descripccion del Cable</span>-->

                      </div>
                      <div style="width: 100%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptFecha"
                            class="form-control"
                            data-index="5">
                            <label for="iptFecha">Buscar por Fecha</label>
                      </div>
                      <div style="width: 100%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptFecha"
                            class="form-control"
                            data-index="5">
                            <label for="iptFecha">Buscar por Fecha</label>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group mb-2">
                              <label class="" for="selFamiliaReg"><i class=""></i>
                                  <span class="small">Familia:</span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selFamiliaReg" required>
                              </select>
                              <div class="invalid-feedback">Seleccione la Familia</div>
                          </div>
                        </div>


                        <div class="col-lg-12">
                          <div class="form-group mb-2">
                              <label class="" for="selFamiliaReg"><i class=""></i>
                                  <span class="small">Familia:</span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selFamiliaReg" required>
                              </select>
                              <div class="invalid-feedback">Seleccione la Familia</div>
                          </div>
                        </div>


                    </div>

                  </div>
                    </div>
                  </div>
                </div> <!-- ./ end card-body -->
              </div>
            </div>  
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
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content -->
<div class="modal fade" id="mdlSimulacion" role="dialog">
  
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <div class="modal-header bg-gray py-1 align-items-center" >
            <h5 class="modal-title">Agregar Cable</h5>
            <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
            </button>
        </div>
        
        <div class="modal-body">
            <form class="needs-validation" novalidate>
                <div class="row">

                      <div>
                          <input type="text" id="idCable"
                            name="idCable">
                      </div>
                    
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                          <label class="" for="ipCablereg"><i class=""></i>
                              <span class="small">Nombre del Cable</span><span class="text-danger">*</span>
                          </label> 
                          <input type="text" class="form-control form-control-sm" id="ipCablereg"
                            name="ipCablereg" placeholder="Nombre del Cable" required>
                            <div class="invalid-feedback">Ingrese el nombre del cable</div>
                          <!--<span id="validate_cable" class="text-danger small fst-italic"
                              style="display:none">Debe ingresar el nombre del Cable</span>fas fa-barcode fs-6-->
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                          <label class="" for="ipDescreg"><i class=""></i>
                              <span class="small">Descripccion:</span><span class="text-danger">*</span>
                          </label> 
                          <input type="text" class="form-control form-control-sm" id="ipDescreg"
                            name="ipDescreg" placeholder="Descripccion del Cable" required>
                          <div class="invalid-feedback">Ingrese la descripccion del cable</div>
                          <!--<span id="validate_desc" class="text-danger small fst-italic"
                              style="display:none">Debe ingresar la Descripccion del Cable</span>-->
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mb-2">
                          <label class="" for="ipProveedorreg"><i class=""></i>
                              <span class="small">Proveedor:</span><span class="text-danger">*</span>
                          </label> 
                          <input type="text" class="form-control form-control-sm" id="ipProveedorreg"
                            name="ipProveedorreg" placeholder="Nombre del Proveedor" required>
                          <div class="invalid-feedback">Ingrese el proveedor del cable</div>
                          <!--<span id="validate_prov" class="text-danger small fst-italic"
                              style="display:none">Debe ingresar el Proveedor</span>    onclick="formSubmitClick()"-->
                      </div>
                    </div>

                    <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                      data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>

                    <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                      id="btnGuardarProducto">Guardar </button>
                </div>
            </form>
        </div>
    </div>    
  </div>
</div>


