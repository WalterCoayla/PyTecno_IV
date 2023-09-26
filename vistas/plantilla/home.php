<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema IES JCM</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/css/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php 
        # require_once './vistas/plantilla/preloader.php';
        
        require_once './vistas/plantilla/nav.php';

        require_once './vistas/plantilla/aside.php';
        
        ?>
        <div class="content-wrapper">
            <?php 
            require_once './vistas/plantilla/encabezado.php';
            ?>
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?=$contenido?>
            </div>
        </section>
        </div>
        <?php 
            require_once './vistas/plantilla/footer.php';
            ?>
    </div>
</body>
</html>