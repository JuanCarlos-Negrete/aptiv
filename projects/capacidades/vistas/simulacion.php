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


                <div class="card-body" id="mdlGestionarParametros">
                  <div class="row">
                    <div class="col-lg-10 d-lg-flex">


                      <div style="width: 40%" class="form-floating mx-1">
                         <div class="col-lg-6">
                          <div class="form-group mb-2">

                              <label class="" for="intTurnos"><i class=""></i>
                                  <span class="big">Turnos: </span><span class="text-danger">*</span>
                              </label> 
                               <input type="text" class="form-control form-control-sm" id="ipValorreg"
                                name="intTurnos" placeholder="Seleccione Turno" required>
                              <div class="invalid-feedback">Seleccione Turno</div>       
                          </div>


                               <div class="form-group mb-2">
                                   <label class="" for="intHoras"><i class=""></i>
                                   <span class="big">Horas:</span><span class="text-danger">*</span>
                                   </label> 
                                    <input type="text" class="form-control form-control-sm" id="intHoras"
                                    name="intHoras" placeholder="Introduzca horas" required>
                                    <div class="invalid-feedback">Llenar correctamente</div>
                               </div>
                          </div>
                      </div>



                      <div style="width: 40%" class="form-floating mx-1">
                         <div class="col-lg-10">
                          <div class="form-group mb-2">
                              <label class="" for="selArea"><i class=""></i>
                                  <span class="big">Area: </span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selArea" required>
                              </select>
                              <div class="invalid-feedback">Seleccione Area</div>       
                          </div>

                               <div class="form-group mb-2">
                                  <label class="" for="selLinea"><i class=""></i>
                                  <span class="big">Linea: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selLinea" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Linea</div>       
                          </div>

                          <div class="form-group mb-2">
                                  <label class="" for="selLado"><i class=""></i>
                                  <span class="big">Lado: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selLado" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Lado</div>       
                          </div>

                          </div>
                      </div>
                       <div style="width: 40%" class="form-floating mx-1">
                         <div class="col-lg-10">


                          <div class="form-group mb-2">
                              <label class="" for="selNumP"><i class=""></i>
                                  <span class="big">Numero de Parte: </span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selNumP" required>
                              </select>
                              <div class="invalid-feedback">Seleccione Numero de Parte</div>       
                          </div>

                               <div class="form-group mb-2">
                                  <label class="" for="selCable"><i class=""></i>
                                  <span class="big">Cable: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selCable" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Cable</div>       
                          </div>

                          <div class="form-group mb-2">
                                  <label class="" for="selTipoC"><i class=""></i>
                                  <span class="big">Tipo Cable: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selTipoC" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Tipo</div>       
                          </div>

                          <div class="form-group mb-2">
                                  <label class="" for="selCodigo"><i class=""></i>
                                  <span class="big">Codigo: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selCodigo" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Codigo</div>       
                          </div>

                          <div class="form-group mb-2">
                                  <label class="" for="selConec"><i class=""></i>
                                  <span class="big">Conector: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selConec" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Conector</div>       
                          </div>

                          <div class="form-group mb-2">
                                  <label class="" for="selLeadsqty"><i class=""></i>
                                  <span class="big">Cantidad de Leads: </span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selLeadsqty" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Cantidad</div>       
                          </div>


                        </div>
                      </div>
                      <div style="width: 40%" class="form-floating mx-1">
                         <div class="col-lg-10">

                          <div class="form-group mb-2">
                                  <label class="" for="selPrograma"><i class=""></i>
                                  <span class="big">Programa:</span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selPrograma" required>
                                  </select>
                                  <div class="invalid-feedback">Seleccione Programa</div>       
                          </div>
                          <div class="form-group">
                             <label>Fecha Inicial:</label>
                             <input type="date" class="datepicker btn-block"  name="from" id="dateFeInicial" Placeholder="Selecciona Fecha" value="#">
                             <label>Fecha Final:</label>
                             <input type="date" class="datepicker btn-block"  name="from" id="dateFeFinal" Placeholder="Selecciona Fecha" value="#">
                          </div>
                          <div class="form-group mb-2">
                                  <label class="" for="selVisualizacion"><i class=""></i>
                                  <span class="big">Visualizacion:</span><span class="text-danger">*</span>
                                  </label> 
                                  <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selVisualizacion" required>

                                  </select>
                                  <div class="invalid-feedback">Seleccione fecha a visualizar</div>       
                          </div>
                        </div>
                  <!-- /.input group -->
                      </div>
                     </div>
                 </div>
               </div>

                    </div>
                  </div>
                </div> <!-- ./ end card-body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-info">

                <div class="card-header">
                  <h2 class="card-title"><b>Resultados</b></h2>
                    <div class="card-tools">

                    </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->

               <!-- /.input group -->
              </div>
            </div>
          </div>
      </div>
    </div>

<script>

  var accion;
  var table;
  
  var Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2000
  });

  var dato = new FormData();

  dato.append("areas",     $("#selArea option:selected").text());


  $.ajax({
      url: "ajax/areas.ajax.php",
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(respuesta){

        var options = '<option selected value="0">Selecciona un tipo de Tolerancia</option>';

        for(let index = 0; index < respuesta.length; index++){
          options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
        }
        
          $("#selArea").html(options);
      }
  });
 


</script>