<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Gestionar Afiliacion</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<?php session_start(); 
if(!isset($_SESSION['user'])){
        header('Location:index.php');
        exit;
}?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/admin-big-01.png" alt="John Doe" />
                    </div>
                    <h4 class="name">Usuario</h4>
                    <a href="#">Cerrar Sesion</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="Administrador.php">
                                <i class="fas fa-user"></i>Informacion</a>
                        </li>
                        <li>
                            <a href="GestionarPasaje.php">
                                <i class="fas fa-shopping-basket"></i>Gestionar Pasaje</a>
                        </li>
                        <li>
                            <a href="GestionarViaje.php">
                                <i class="fas fa-location-arrow"></i>Gestionar Viaje</a>
                        </li>
                        <li>
                            <a href="GestionarAfiliacion.php">
                                <i class="fas fa-bar-chart"></i>Gestionar Afiliacion</a>
                        </li>
                        <li>
                            <a href="GestionarUsuarios.php">
                                <i class="fas fa-users"></i>Gestionar Usuarios</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- MENU Escondido -->
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/admin-big-01.png" alt="John Doe" />
                        </div>
                        <h4 class="name">Usuario</h4>
                        <a href="cerrarsesion.php">Cerrar Sesion</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="Administrador.php">
                                    <i class="fas fa-user"></i>Informacion</a>
                            </li>
                            <li>
                                <a href="GestionarPasaje.php">
                                    <i class="fas fa-shopping-basket"></i>Gestionar Pasaje</a>
                            </li>
                            <li>
                                <a href="GestionarViaje.php">
                                    <i class="fas fa-location-arrow"></i>Gestionar Viaje</a>
                            </li>
                            <li>
                                <a href="GestionarAfiliacion.php">
                                    <i class="fas fa-bar-chart"></i>Gestionar Afiliacion</a>
                            </li>
                            <li>
                                <a href="GestionarUsuarios.php">
                                    <i class="fas fa-users"></i>Gestionar Usuarios</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">Te encuentras en:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Agregar Usuario</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Administrador</li>
                                        </ul>
                                    </div>
                                    <!-- <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Agregar Afiliacion</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">Nuevo Usuario</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Agregar Usuario</h3>
                        </div>
                        <hr>
                        <form action="add_user.php" method="post" novalidate="novalidate">
                            
                            
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                <input id="usuario" name="usuario" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Apellido</label>
                                <input id="apellido" name="apellido" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                    autocomplete="cc-number">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">DNI</label>
                                <input id="dni" name="dni" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                    autocomplete="cc-number">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Área</label>
                                <input id="area" name="area" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                    autocomplete="cc-number">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Email</label>
                                <input id="email" name="email" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                    autocomplete="cc-number">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Contraseña</label>
                                <input id="password" name="password" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                    autocomplete="cc-number">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Fecha de Acuerdo</label>
                                        <input id="fechav" name="fechav" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                            autocomplete="cc-exp">
                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                            </div>
                                <div class="offset-5">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> Agregar
                                </button>
                                </div>
                        </form>
                    </div>
                    
                </div>
            </div>


            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->