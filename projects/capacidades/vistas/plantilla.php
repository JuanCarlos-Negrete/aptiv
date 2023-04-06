<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aptiv Capacidades</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="vistas/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="vistas/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="vistas/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vistas/assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="shortcut icon" href="vistas/assets/dist/img/aptiv_page.ico" />
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/assets/plugins/daterangepicker/daterangepicker.css">
<!-- Estilos personzalidos -->
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="vistas/assets/plugins/toastr/toastr.css">
  <link rel="stylesheet" href="vistas/assets/plugins/jquery-ui/css/jquery-ui.css">
  <!-- Bootstrap 5 -->
  <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
  <!-- ============================================================
  =ESTILOS PARA USO DE DATATABLES JS
  ===============================================================-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

<!-- jQuery (Diseño Principal)-->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.js"></script>
<!-- date-range-picker -->
<script src="vistas/assets/plugins/daterangepicker/daterangepicker.js"></script>


 <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="vistas/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toast-->
    <script src="vistas/assets/plugins/toastr/toastr.min.js"></script>
    <script src="vistas/assets/plugins/jquery-ui/js/jquery-ui.js"></script>
    <!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
<?php
  include "modulos/load_slide.php";
  include "modulos/navbar.php";
  include "modulos/aside.php";
?>

  <!-- Contenido de Pagina WRAPPER -->
  <div class="content-wrapper">
  <?php
    include "vistas/dashboard.php";
  ?>
  </div>
  <?php 
  include "modulos/footer.php"; 
  ?>

  <script>
      function CargarContenido(pagina_php, contenedor){
          $("." + contenedor).load(pagina_php);
      }
  </script>

</div>
</body>
</html>