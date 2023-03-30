    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alta de Familia</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Alta de Familia</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!--row para criterios de busqueda -->
        <div class="row">
            <div class="col-lg-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">BUSQUEDA</h3>
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
                        <input 
                            type="text" 
                            id="iptDescripccion"
                            class="form-control"
                            data-index="2">
                        <label for="iptDescripccion">Buscar por Dscripccion</label>
                      </div>
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptProcesado"
                            class="form-control"
                            data-index="4">
                            <label for="iptProcesado">Buscar por tipo de proceso</label>
                      </div>
                      <!--<div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptProveedor"
                            class="form-control"
                            data-index="4">
                            <label for="iptProveedor">Buscar por Acotacion</label>
                      </div>-->
                      <div style="width: 25%" class="form-floating mx-1">
                        <input 
                            type="text" 
                            id="iptFecha"
                            class="form-control"
                            data-index="8">
                            <label for="iptFecha">Buscar por Fecha</label>
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
            <table id="tbl_Componentes" class="table table-striped w-100 shadow">
                <thead class="bg-info"> 
                  <tr>
                    <th></th>
                    <th>ID</th>
                    <th>DESCRIPCCION</th>
                    <th>IMAGEN</th>
                    <th>PROCESADO</th>
                    <th>POR FUERA DE HOUSING/OUTER</th>
                    <th>POR DENTRO DE HOUSING/OUTER</th>
                    <th>POR FUERA DE FERRULE</th>
                    <th>ACTUALIZADO</th>
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
    <div class="modal fade" id="mdlGestionarComponentes" role="dialog">
      
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center" >
                <h5 class="modal-title">Agregar Familia</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                </button>
            </div>
            
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <!--<div class="col-lg-6">
                          <div class="form-group mb-2">
                              <label class="" for="ipNumeroeg"><i class=""></i><fas fa-barcode fs-6-
                                  <span class="small">Numero de Parte</span><span class="text-danger">*</span>
                              </label> 
                              <input type="text" class="form-control form-control-sm" id="ipNumeroeg"
                                name="ipNumeroeg" placeholder="Numero de parte" required>
                                <div class="invalid-feedback">Ingrese el numero de parte</div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mb-2">
                              <label class="" for="ipTiporeg"><i class=""></i>
                                  <span class="small">Tipo de Conector</span><span class="text-danger">*</span>
                              </label> 
                              <input type="text" class="form-control form-control-sm" id="ipTiporeg"
                                name="ipTiporeg" placeholder="Tipo de conector" required>
                              <div class="invalid-feedback">Ingrese tipo de conector</div>
                          </div>
                        </div>-->
                        <div class="col-lg-12">
                          <div class="form-group mb-2">
                              <label class="" for="selFamiliaReg"><i class="fas fa-dumpster fs-6"></i>
                                  <span class="small">Familia:</span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selFamiliaReg">
                              </select>
                              <div class="invalid-feedback">Seleccione la Familia</div>
                          </div>
                        </div>
                        
                        <div class="col-lg-12">
                          <div class="form-group mb-2">
                              <label class="" for="selProcesoReg"><i class="fas fa-dumpster fs-6"></i>
                                  <span class="small">Proceso:</span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selProcesoReg">
                              </select>
                              <div class="invalid-feedback">Seleccione el Proceso</div>
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group mb-2">
                              <label class="" for="selAcotaReg"><i class="fas fa-dumpster fs-6"></i>
                                  <span class="small">Acotacion:</span><span class="text-danger">*</span>
                              </label> 
                              <select class="form-select form-select-sm" aria-label=".form-select example"
                                    id="selAcotaReg">
                              </select>
                              <div class="invalid-feedback">Seleccione la acotacion</div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group mb-2">
                              <label class="" for="ipValorreg"><i class=""></i>
                                  <span class="small">Valor</span><span class="text-danger">*</span>
                              </label> 
                              <input type="text" class="form-control form-control-sm" id="ipValorreg"
                                name="ipValorreg" placeholder="Valor" required>
                              <div class="invalid-feedback">Ingrese el valor</div>
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
<script>

  var accion;
  var table;
  
  var Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2000
  });

  $.ajax({
      url: "ajax/familias.ajax.php",
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(respuesta){

        var options = '<option selected value="0">Selecciona una Familia</option>';

        for(let index = 0; index < respuesta.length; index++){
          options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
        }
        
          $("#selFamiliaReg").html(options);
      }
  });
  
  $.ajax({
      url: "ajax/proceso.ajax.php",
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(respuesta){

        var options = '<option selected value="0">Selecciona una Proceso</option>';

        for(let index = 0; index < respuesta.length; index++){
          options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
        }
        
          $("#selProcesoReg").html(options);
      }
  });

  $.ajax({
      url: "ajax/acotacion.ajax.php",
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(respuesta){

        var options = '<option selected value="0">Selecciona la Acotacion</option>';

        for(let index = 0; index < respuesta.length; index++){
          options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
        }
        
          $("#selAcotaReg").html(options);
      }
  });

  $(document).ready(function(){
    /*
    //CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    */
      table = $("#tbl_Componentes").DataTable({
        dom:'Bfrtip',
        buttons:[
          {
            text: 'Agregar Componente',
            className: 'AddNewRecord',
            action: function(e, dt, config){
                $("#mdlGestionarComponentes").modal('show');
                accion = 2;
            }
          },
            'excel', 'print'
        ],
        ajax:{
          url:"ajax/Componentes.ajax.php",
          dataSrc: '',
          type: "POST",
          data: {'accion' : 1}, //1:: lista productos
        },
        responsive:{
          details:{
            type: 'column'
          }
        },
        columnDefs:[
          {
            targets:0,
            orderable: false,
            clasName: 'control'
          },
          {
            targets:1,
            visible: false

          },
          {
            targets:9,
            orderable: false,
            render: function(data, type, full, meta){
              return "<center>" +
                          "<span class='btnEditarComponente text-primary px-1' style='cursor:pointer;'>" + 
                          "<i class='fas fa-pencil-alt fs-5'></i>" +
                          "</span>" +
                          "<span class='btnElimiarComponente text-danger px-1' style='cursor:pointer;'>" + 
                          "<i class='fas fa-trash fs-5'></i>" +
                          "</span>"+
                    "</center>"
            }
          }
        ],
        language:{
          url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
      });
      /*
      * EVENTOS PARA CRITERIOS DE BUSQUEDA
      */
      $("#iptDescripccion").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#iptProcesado").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#iptFecha").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#btnLimpiarBusqueda").on('click',function(){

          $("#iptDescripccion").val('')
          $("#iptProceso").val('')
          $("#iptFecha").val('')

          table.search('').columns().search('').draw();
      })

      $("#btnCancelarRegistro, btnCerrarModal" ).on('click',  function(){

        $("#validate_Componente").css("display", "none");
        $("#validate_desc").css("display", "none");
        $("#validate_prov").css("display", "none");

        $("#selFamiliaReg").val("");
        $("#selProcesoReg").val("");
        $("#selAcotaReg").val("");
        $("#ipValorreg").val("");
      })
  })

  document.getElementById("btnGuardarProducto").addEventListener("click", function(){
    //alert('funciono');
      var forms = document.getElementsByClassName("needs-validation");
      var validation = Array.prototype.filter.call(forms, function(form){

    if(form.checkValidity() === true){
          console.log("Listo para registrar");
            //validar ingreso de imputs
      Swal.fire({
          title: 'Esta seguro de registrar el Componente',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, deseo registrarlo!',
          cancelButtonText: 'Cancelar',
      }).then((result) => {
          if(result.isConfirmed){

            var dato = new FormData();

            dato.append("accion", accion);
            dato.append("familia", $("#selFamiliaReg").val());
            dato.append("proceso", $("#selProcesoReg").val());
            dato.append("acotacion", $("#selAcotaReg").val());
            dato.append("valor", $("#ipValorreg").val());
            /*if(accion == 3){
                var titulo_msj = "El Componente se registro correctamente";
            }
            if(accion == 4){
              var titulo_msj = "El Componente se actualizo correctamente";
            }*/
            
            $.ajax({
                url: "ajax/Componentes.ajax.php",
                method: "POST",
                data: dato,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(respuesta){

                  if(respuesta == "ok"){
                    Toast.fire({
                          icon: 'success',
                          title: "mensaje", //titulo_msj
                      });

                      table.ajax.reload();

                      $("#mdlGestionarComponentes").modal('hide');

                      $("#selFamiliaReg").val("");
                      $("#selProcesoReg").val("");
                      $("#selAcotaReg").val("");
                      $("#ipValorreg").val("");
                  } else {
                    Toast.fire({
                      icon: 'success',
                      title: 'El Componente no se pudo registrar'
                    });
                  }
                }
            });
          }
      })
        }else{
          console.log("No paso la validacion");
        }
        form.classList.add('was-validated');
      });
  });

  document.getElementById("btnCancelarRegistro").addEventListener("click", function(){

      $(".needs-validation").removeClass("was-validated");
  })

  $('#tbl_Componentes tbody').on('click', '.btnEditarComponente', function(){

    accion = 4;

    $("#mdlGestionarComponentes").modal('show');

      var data = table.row($(this).parents('tr')).data();
      $("#ipComponentereg").val(data[2]);
      $("#ipTiporeg").val(data[3]);
      $("#ipValorreg").val(data[4]);
      $("#ipValorreg").val(data[4]);
  })

</script>