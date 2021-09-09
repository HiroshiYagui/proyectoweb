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
    <title>Administrador</title>

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
<?php session_start(); ?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR    BARRA LATERAL -->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/admin-big-01.png" alt="User Sue" />
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
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP MENU CONTRAIBLE-->
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
                                <div class="header-button-item js-item-menu">
                                    <!-- <i class="zmdi zmdi-search"></i> -->
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </header>

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
                        <a href="index.php">Sign out</a>
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
                                                <a href="#">Informacion</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Administrador</li>
                                        </ul>
                                    </div>
                                    <!-- <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Mi Informacion</strong>
                        <small> :</small>
                    </div>
                    <div class="card-body card-block">
                    <?php
                        include 'dbcon.php';
                        if(isset($_SESSION['user'])){
                        $sql = "SELECT codigo,nombre,apellido,usuario,dni,area,fecha from usuario 
                        WHERE id=".$_SESSION['user'].";";
                        $resultado= mysqli_query($conn, $sql);
                        if(!$resultado){
                            header('Location:login.php?error=1');
                            exit;
                        }else{
                        $fetch=mysqli_fetch_array($resultado);
                        echo "<div class='form-group'>
                            <label for='company' class=' form-control-label'>Codigo</label>
                            <input type='text' id='nombre' value='".$fetch['codigo']."' class='form-control' disabled=''>
                            </div>
                        <div class='form-group'>
                            <label for='company' class=' form-control-label'>Nombres</label>
                            <input type='text' id='nombre' value='".$fetch['nombre']."' class='form-control' disabled=''>
                        </div>
                        <div class='form-group'>
                            <label for='vat' class=' form-control-label'>Apellido</label>
                            <input type='text' id='apellido' value='".$fetch['apellido']."' class='form-control' disabled=''>
                        </div>
                        <div class='form-group'>
                            <label for='street' class=' form-control-label'>DNI</label>
                            <input type='text' id='direccion' value='".$fetch['dni']."' class='form-control' disabled=''>
                        </div>
                        <div class='form-group'>
                            <label for='street' class=' form-control-label'>E-mail</label>
                            <input type='text' id='email' value='".$fetch['usuario']."' class='form-control' disabled=''>
                        </div>
                        <div class='form-group'>
                            <label for='street' class=' form-control-label'>Área</label>
                            <input type='text' id='email' value='".$fetch['area']."' class='form-control' disabled=''>
                        </div>";
                    }
                    }else{
                        header('Location:login.php?error=1');
                        exit;
                    }
                        ?>
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