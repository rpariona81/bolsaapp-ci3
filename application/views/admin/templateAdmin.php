<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template" />
    <meta name="robots" content="noindex,nofollow" />
    <title><?= getenv('APP_NAME') ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public/admin/assets/images/favicon.png') ?>" />
    <!-- Custom CSS -->
    <link href="<?= base_url('public/admin/dist/css/golden.css') ?>" rel="stylesheet" />
    <!--<link href="<?= base_url('public/admin/dist/css/style.min.css') ?>" rel="stylesheet" />-->
    <!-- This Page CSS -->
    <link rel="stylesheet" href="<?= base_url('public/admin/dist/libs/prismjs/themes/prism-okaidia.min.css') ?>">

    <link href="<?= base_url('public/admin/assets/plugins/datatable/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('public/admin/assets/plugins/datatable/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?= base_url('public/admin/tinymce/tinymce.min.js') ?>"></script>
    <script>
        tinymce
            .init({
                selector: 'textarea#detail',
                plugins: "textcolor, lists code",
                toolbar: " undo redo | bold italic | alignleft aligncenter alignright alignjustify \n\
		              | bullist numlist outdent indent | forecolor backcolor table code"
            });
    </script>
</head>

<body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">

        </svg>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- -------------------------------------------------------------- -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!--<img
                  src="<?= base_url('public/admin/assets/images/logo-icon.png') ?>"
                  alt="homepage"
                  class="dark-logo"
                />-->
                            <!-- Light Logo icon -->
                            <!--src="<?= base_url('public/admin/assets/images/logo-light-icon.png') ?>"-->
                            <img src="<?= base_url('public/admin/assets/images/logo-mini.png') ?>" alt="homepage" width="60" height="70" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            Bolsa laboral
                            <!-- Light Logo text -->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a>
                        </li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $this->session->userdata('user_rol_title') ?>&nbsp;<i class="fa fa-user fa-fw"></i>
                                <!--<img src="<?= base_url('public/admin/assets/images/users/1.jpg') ?>" alt="user" width="30" class="profile-pic rounded-circle" />-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 bg-info text-white mb-2">
                                    <!--<div class="">
                                        <img src="<?= base_url('public/admin/assets/images/users/1.jpg') ?>" alt="user" class="rounded-circle" width="60" />
                                    </div>-->
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white"><?= $this->session->userdata('user_name') . ' ' . $this->session->userdata('user_paterno') ?></h4>
                                        <p class="mb-0"><?= $this->session->userdata('user_email') ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="#"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>
                                    Mi perfil</a>
                                <a class="dropdown-item" href="#"><i data-feather="credit-card" class="feather-sm text-info me-1 ms-1"></i>
                                    Cambio de clave</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                                    Cerrar sesión</a>

                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- -------------------------------------------------------------- -->
        <!-- End Topbar header -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">WebApp Bolsa laboral</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Panel de control </span>
                            </a>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/estudiantes" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Estudiantes</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/docentes" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Docentes</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/convocatorias" aria-expanded="false"><i class="mdi mdi-clipboard-check"></i><span class="hide-menu">Convocatorias</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/postulaciones" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu">Postulaciones</span></a>
                        </li>
                        <hr>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/perfil" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Mi perfil</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/logout" aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Cerrar sesión</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Configuraciones"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar sesión"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- -------------------------------------------------------------- -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-wrapper">

            <!-- -------------------------------------------------------------- -->
            <!-- Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <div class="container-fluid">

                <?php $this->load->view($contenido); ?>

                <!-- -------------------------------------------------------------- -->
                <!-- End PAge Content -->
                <!-- -------------------------------------------------------------- -->
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- End Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <!-- -------------------------------------------------------------- -->
            <!-- footer -->
            <!-- -------------------------------------------------------------- -->
            <footer class="footer text-center">
                All Rights Reserved by <?= getenv('APP_NAME') ?>.
            </footer>
            <!-- -------------------------------------------------------------- -->
            <!-- End footer -->
            <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- customizer Panel -->
    <!-- -------------------------------------------------------------- -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle fs-6"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
                            <label class="form-check-label" for="theme-view">
                                <span>Dark Theme</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar" />
                            <label class="form-check-label" for="collapssidebar">
                                <span>Collapse Sidebar</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position" />
                            <label class="form-check-label" for="sidebar-position">
                                <span>Fixed Sidebar</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="header-position" class="form-check-input" id="header-position" />
                            <label class="form-check-label" for="header-position">
                                <span>Fixed Header</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
                            <label class="form-check-label" for="boxed-layout">
                                <span>Boxed Layout</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/1.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle online"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/2.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle busy"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/3.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle away"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/4.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/5.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/6.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/7.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="<?= base_url('public/admin/assets/images/users/8.jpg') ?>" alt="user" class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-light-success text-success">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-info text-info">
                                <i data-feather="camera" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?= base_url('public/admin/assets/images/users/2.jpg') ?>" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?= base_url('public/admin/assets/images/users/1.jpg') ?>" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-primary text-primary">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-info text-info">
                                <i data-feather="send" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?= base_url('public/admin/assets/images/users/4.jpg') ?>" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?= base_url('public/admin/assets/images/users/6.jpg') ?>" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="<?= base_url('public/admin/dist/libs/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('public/admin/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- apps -->
    <script src="<?= base_url('public/admin/dist/js/app.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/dist/js/app.init.js') ?>"></script>
    <script src="<?= base_url('public/admin/dist/js/app-style-switcher.js') ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('public/admin/dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js') ?>"></script>
    <script src="<?= base_url('public/admin/dist/libs/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('public/admin/dist/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('public/admin/dist/js/sidebarmenu.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('public/admin/dist/js/feather.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/dist/js/custom.min.js') ?>"></script>
    <!-- This Page JS -->
    <script src="<?= base_url('public/admin/dist/libs/prismjs/prism.js') ?>"></script>

    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/jquery.datatables.min.js') ?>"></script>
    <!--<script src="<?= base_url('public/admin/assets/plugins/datatable/js/datatables.bootstrap4.min.js') ?>"></script>-->
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.flash.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/jszip.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('public/admin/assets/plugins/datatable/js/buttons.colVis.min.js') ?>"></script>

    <script>
        $(document).ready(function() {
            //$.noConflict();
            $('#datatablesSimple').DataTable({
                pageLength: 7,
                order: [],
                scrollX: true,
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
                dom: 'Bfrtip',
                buttons: ['copy', 'pdf',
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                            $('row c[r^="B"]', sheet).attr('s', '57');
                            //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                            $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>