<!doctype html>
<html lang="en">

<head class="topbar">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>
    <link href="<?= base_url('public/assets/font-awesome/4.7.0/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('public/lite/css/sticky-footer-navbar.css') ?>" rel="stylesheet">
    <link href="<?= base_url('public/lite/css/colors/spinners.css') ?>" id="theme" rel="stylesheet">
    <link href="<?= base_url('public/lite/css/colors/style.css') ?>" id="theme" rel="stylesheet">
    <link href="<?= base_url('public/lite/css/colors/golden.css') ?>" id="theme" rel="stylesheet">

</head>

<!--<body class="fix-header fix-sidebar card-no-border">-->

<body class="d-flex flex-column h-100">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <header class="topbar">
        <!-- Fixed navbar -->
        <!--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">-->
        <nav class="navbar navbar-expand-md navbar-toggleable-sm navbar-light">
            <a class="navbar-brand" href="#">
                <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                           
                            <!-- Light Logo icon -->
                            <img src="<?= base_url('public/assets/images/logo-mini.png')?>" alt="homepage" class="light-logo" width="60" height="60"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span class="top-header-title">Bolsa laboral
                         </span> </a>
                        </b>
                        <!--End Logo icon -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!--<ul class="navbar-nav mr-auto">-->
                <ul class="navbar-nav mr-auto mb-2 mb-md-0">                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/users">
                            <i class="fa fa-area-chart"></i>
                            Convocatorias
                        </a>
                    </li>
                    <?php
                    if ($this->session->userdata('user_rol') == 'estudiante') {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" aria-current="page" href="/users/postulaciones">';
                        echo '   <i class="fa fa-id-badge"></i>';
                        echo '    Mis postulaciones';
                        echo '</a>';
                        echo '</li>';

                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="/users/perfil">';
                        echo '    <i class="fa fa-id-card-o"></i>';
                        echo '    Mi perfil</a>';
                        echo '</li>';

                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="/users/descarga_cv">';
                        echo '    <i class="fa fa-file-word-o"></i>';
                        echo '    Modelo CV</a>';
                        echo '</li>';
                    } else {
                    }
                    ?>
                </ul>
                <ul class="d-flex navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <strong><?= $this->session->userdata('user_rol_title') . ' ' . $this->session->userdata('user_name') . ' ' . $this->session->userdata('user_paterno') ?></strong><i class="fa fa-user fa-fw"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/users/credenciales">
                                    <font color="black">Cambiar clave</font>
                                </a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><form class="text-center ml-1" action="/logout">
                                    <input class="btn btn-primary" id="btnLogout" type="submit" value="Cerrar sesión"></input>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="page-wrapper mt-2">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- Begin page content -->
        <main role="main" class="container">

            <h1 class="mt-5">Sticky footer with fixed navbar</h1>
            <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
            <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>

        </main>
    </div>


    <footer class="footer">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('public/assets/plugins/data-table/js/jquery-3.7.0.js')?>"></script>
    <script src="<?= base_url('public/assets/vendor/js/jquery-slim.min.js')?>"></script>
    <script src="<?= base_url('public/assets/vendor/js/popper.min.js')?>"></script>

    <script src="<?= base_url('public/assets/plugins/bootstrap/js/tether.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>