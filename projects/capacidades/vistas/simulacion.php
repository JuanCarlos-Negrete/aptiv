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
 <!--row para criterios de busqueda -->
        <div class="row">
            <div class="col-lg-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Ingresa los datos correctamente:</h3>
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


                      <div style="width: 10%" class="margin">
                       <label for="smTurno">Turno:</label> 
                        <div class="btn-group">
                             <button type="button" class="btn btn-default"></button>
                             <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></button>
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


                      <div style="width: 10%" class="margin">
                        <label for="iptDescripccion">Horas:</label>
                        <input type="text" 
                            id="smHoras"
                            class="form-control"
                            data-index="3">
                        
                      </div>


                      <div style="width: 10%" class="form-floating mx-1">
                       <label for="smGrafico">Tipo Grafico:</label> 
                        <div class="btn-group">
                             <button type="button" class="btn btn-default"></button>
                             <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">Area</a>
                            <a class="dropdown-item" href="#">Bar</a>
                            <a class="dropdown-item" href="#">Stacked Area</a>
                            <a class="dropdown-item" href="#">Dtacked Bar</a>
                          </div>
                        </div>
                      </div>


                      <div style="width: 20%" class="form-floating mx-1">
                       <label for="smGrafico">Data Visualization:</label> 
                        <div class="btn-group">
                             <button type="button" class="btn btn-default"></button>
                             <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"></button>
                          <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">Diaria</a>
                            <a class="dropdown-item" href="#">Semanal</a>
                            <a class="dropdown-item" href="#">Mensual</a>
                            <a class="dropdown-item" href="#">Anual</a>
                          </div>
                        </div>
                      </div>

                      <div class="margin">
                       <!-- Date range -->
                      <div class="form-group">
                       <label>Date range:</label>

                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                        <input type="text" class="form-control float-right" id="reservation">
                      </div>
                  <!-- /.input group -->
                      </div>
                <!-- /.form group -->
                      </div>
                <!-- /.form group -->
                        </div>
                  </div>
                    </div>
                  </div>
                </div> <!-- ./ end card-body -->
              </div>
            </div>  
        </div>

        
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

</script>