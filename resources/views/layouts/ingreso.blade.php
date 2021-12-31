<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de registro y gestión de asistencia laboral ICAS">
    <meta name="author" content="Adolfo Salvador Álvarez Pérez">
    <meta name="keywords" content="registro, asistencia, icas, corte, santiago, funcionarios">
    <link rel="shortcut icon" href="favicon.ico"/>

    <!-- Title Page-->
    <title>CHRONOS - REGISTRO ASISTENCIA ICAS @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet"
          media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
          media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"
          media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">

            <div class="login-wrap">
                <div class="login-logo d-none d-sm-none d-md-block">
                    <a href="{{route('ingreso')}}">
                        <img src="images/icon/logo-poder-judicial.png"
                             alt="chronos">
                    </a>
                </div>
                <div class="login-content">
                    <h2 class="titulo">SISTEMA CHRONOS</h2>
                    <div class="login-form">
                     @section('content')
                     @show
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Trigger the modal with a button -->

<!-- Modal -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Contacto de soporte</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <p>Si no tienes cuenta u olvidaste tu contraseña, contactanos al correo <a
                        href="mailto:hfgonzalez@pjud.cl">hfgonzalez@pjud.cl</a>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
