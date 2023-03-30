<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alta de Cables</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Alta de Cables</li>
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
<div class="modal fade" id="mdlGestionarCables" role="dialog">
  
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
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                          <label class="" for="ipCablereg"><i class="fas fa-barcode fs-6"></i>
                              <span class="small">Nombre del Cable</span><span class="text-danger">*</span>
                          </label> 
                          <input type="text" class="form-control form-control-sm" id="ipCablereg"
                            name="ipCablereg" placeholder="Nombre del Cable" required>
                            <div class="invalid-feedback">Ingrese el nombre del cable</div>
                          <!--<span id="validate_cable" class="text-danger small fst-italic"
                              style="display:none">Debe ingresar el nombre del Cable</span>-->
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                          <label class="" for="ipDescreg"><i class="fas fa-barcode fs-6"></i>
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
                          <label class="" for="ipProveedorreg"><i class="fas fa-barcode fs-6"></i>
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
<script>

  var accion;
  var table;
  var titulo_msj;
  var Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2000
  });

  $(document).ready(function(){
    /*
    //CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    */
   accion = 1;
      table = $("#tbl_cables").DataTable({
        dom:'Bfrtip',
        buttons:[
          {
            text: 'Agregar Cable',
            className: 'AddNewRecord',
            action: function(e, dt, config){
                $("#mdlGestionarCables").modal('show');
                accion = 2;
            }
          },
            'excel', 'print'
        ],
        ajax:{
          url:"ajax/cables.ajax.php",
          dataSrc: '',
          type: "POST",
          data: {'accion' : accion}, //1:: lista productos
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
            targets:6,
            orderable: false,
            render: function(data, type, full, meta){
              return "<center>" +
                          "<span class='btnEditarCable text-primary px-1' style='cursor:pointer;'>" + 
                          "<i class='fas fa-pencil-alt fs-5'></i>" +
                          "</span>" +
                          "<span class='btnElimiarCable text-danger px-1' style='cursor:pointer;'>" + 
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
      $("#iptCable").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#iptDescripccion").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#iptProveedor").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#iptFecha").keyup(function(){
        table.column($(this).data('index')).search(this.value).draw();
      })

      $("#btnLimpiarBusqueda").on('click',function(){

          $("#iptCable").val('')
          $("#iptDescripccion").val('')
          $("#iptProveedor").val('')
          $("#iptFecha").val('')

          table.search('').columns().search('').draw();
      })

      $("#btnCancelarRegistro, btnCerrarModal" ).on('click',  function(){

        $("#validate_cable").css("display", "none");
        $("#validate_desc").css("display", "none");
        $("#validate_prov").css("display", "none");

        $("#ipCablereg").val("");
        $("#ipDescreg").val("");
        $("#ipProveedorreg").val("");
      })
  })

  document.getElementById("btnGuardarProducto").addEventListener("click", function(){
    //alert('funciono');
      var forms = document.getElementsByClassName("needs-validation");
      var validation = Array.prototype.filter.call(forms, function(form){
      var mensaje = "";
      var titulo = "";
       if(accion == 2){
          mensaje = "Si, deseo registrarlo!";
          titulo = "Esta seguro de registrar el Cable";
       }
       if(accion == 4){
          mensaje = "Si, deseo actualizarlo!";
          titulo = "Esta seguro de actualizar los datos";
       }

    if(form.checkValidity() === true){
          console.log("Listo para registrar");
            //validar ingreso de imputs
      Swal.fire({
          title: titulo,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: mensaje,
          cancelButtonText: 'Cancelar',
      }).then((result) => {
          if(result.isConfirmed){

            var dato = new FormData();

            dato.append("accion", accion);
            dato.append("cable", $("#ipCablereg").val());
            dato.append("descripccion", $("#ipDescreg").val());
            dato.append("proveedor", $("#ipProveedorreg").val());

            if(accion == 2){
              titulo_msj = "El Cable se registro correctamente";
            }
            if(accion == 4){
              titulo_msj = "El Cable se actualizo correctamente";
            }

            $.ajax({
                url: "ajax/cables.ajax.php",
                method: "POST",
                data: dato,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(respuesta){
                alert(respuesta);
                  if(respuesta == "ok"){
                    Toast.fire({
                          icon: 'success',
                          title: titulo_msj, //titulo_msj
                      });

                      table.ajax.reload();

                      $("#mdlGestionarCables").modal('hide');

                      $("#ipCablereg").val("");
                      $("#ipDescreg").val("");
                      $("#ipProveedorreg").val("");
                      
                  } else {
                    Toast.fire({
                      icon: 'success',
                      title: 'El cable no se pudo registrar'
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

$('#tbl_cables tbody').on('click', '.btnEditarCable', function(){

  accion = 4;

  $("#mdlGestionarCables").modal('show');
    var data = table.row($(this).parents('tr')).data();
    $("#ipCablereg").val(data[2]);
    $("#ipDescreg").val(data[3]);
    $("#ipProveedorreg").val(data[4]);
})

</script>