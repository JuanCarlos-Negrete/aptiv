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

<!-- jQuery (Diseño Principal)-->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.js"></script>

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