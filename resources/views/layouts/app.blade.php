
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
    <title>REGISTRO ASISTENCIA TRIBUNALES - @yield('title')</title>
    <style>
        @font-face {
            font-family: "Digital";
            src: url("{{url('')}}/fonts/digital-7.ttf");
        }

        #contenedor_reloj {
            text-align: center;
            font-size: 8vw;
            background-color: black;
            font-family: "Digital", cursive;
        }

        .verde {
            color: rgb(30, 255, 0);

        }

        .rojo {
            color: rgb(255, 0, 0);

        }

        .azul {
            color: rgb(36, 72, 255);

        }

        .btn-block {
            padding: 2% 0 !important;
            /* define values in pixels / Percentage or em. whatever suits
            your requirements */

        }
    </style>
    <!-- Fontfaces CSS-->
    <link href="{{url('')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
          media="all">
    <link href="{{url('')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{url('')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('')}}/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
<div class="page-wrapper">
@section('header')
    <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{url('')}}/images/icon/logo-white.png" alt="Chronos"/>
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>MARCAR
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>MIS MARCAS
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>EJEMPLO</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{url('')}}/images/icon/avatar-01.jpg" alt="John Doe"/>
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{Nombre}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{url('')}}/images/icon/avatar-01.jpg" alt="John Doe"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Nombre}}</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Mi Cuenta</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Configuración</a>
                                        </div>

                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Salir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="Chronos"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                                                <span class="hamburger-box">
                                                    <span class="hamburger-inner"></span>
                                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    @show
    <div class="sub-header-mobile-2 d-block d-lg-none">
        <div class="header__tool">


            <div class="account-wrap">
                <div class="account-item account-item--style2 clearfix js-item-menu">
                    <div class="image">
                        <img src="{{url('')}}/images/icon/avatar-01.jpg" alt="{{Nombre}}"/>
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">{{Nombre}}</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="{{url('')}}/images/icon/avatar-01.jpg" alt="{{Nombre}}"/>
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#">{{Nombre}}</a>
                                </h5>
                                <span class="email">johndoe@example.com</span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Mi Cuenta</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Configuración</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="#">
                                <i class="zmdi zmdi-power"></i>Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->

    <!-- PAGE CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @yield('content')

                    </div>
                </div>
            </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-10 p-b-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <img src="{{url('')}}/images/icon/loguito.png" alt="Alvar3z"/>
                                <p>ICAS Santiago - Unidad de servicios - Área TI.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{url('')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{url('')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{url('')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{url('')}}/vendor/wow/wow.min.js"></script>
    <script src="{{url('')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{url('')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{url('')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{url('')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{url('')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{url('')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{url('')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{url('')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{url('')}}/js/main.js"></script>
</div>
</body>

</html>

