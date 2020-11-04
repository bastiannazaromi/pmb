<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="<?= base_url('assets/poltek.ico'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ; ?>/assets/admin/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?= base_url() ; ?>/assets/admin/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
        href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/css/themes/style1/orange-blue.css"
        class="default-style">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/css/themes/style1/orange-blue.css"
        id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/css/style-responsive.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>

</head>


<body class=" ">

    <div class="flash-sukses" data-flashdata="<?= $this->session->flashdata('flash-sukses'); ?>"></div>
    <div class="flash-error" data-flashdata="<?= $this->session->flashdata('flash-error'); ?>"></div>

    <div>
        <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
                class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse"
                        class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                    <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span
                            class="logo-text">PMB</span><span style="display: none"
                            class="logo-text-icon"><sup>PMB</sup></span></a>
                </div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                    <ul class="nav navbar-nav    ">
                        <li class="active"><a href="index.html">Dashboard</a></li>

                    </ul>
                    <ul class="nav navbar navbar-top-links navbar-right mbn">

                        <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img
                                    src="<?= base_url('upload/profil/') . $mahasiswa->foto ; ?>" alt=""
                                    class="img-responsive img-circle" />&nbsp;<span
                                    class="hidden-xs"><?= $mahasiswa->nama; ?></span>&nbsp;<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                <li><a href="<?= base_url('dashboard/logout') ; ?>"><i class="fa fa-key"></i>Log
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">

                        <li class="user-panel">
                            <div class="thumb "><img src="<?= base_url('upload/profil/') . $mahasiswa->foto ; ?>" alt=""
                                    class="img-circle text-center" />
                            </div>
                            <div class="info">
                                <p style="font-size: 12px; margin-bottom: 10px"><?= $mahasiswa->nama ; ?></p>
                                <ul class="list-inline list-unstyled">
                                    <li><a href="#" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a>
                                    </li>
                                    <li><a href="<?= base_url('dashboard/logout') ; ?>" data-hover="tooltip"
                                            title="Logout"><i class="fa fa-sign-out"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li><a href="<?= base_url('dashboard') ; ?>"><i class="fa fa-tachometer fa-fw">
                                    <div class="icon-bg bg-orange"></div>
                                </i><span class="menu-title">Dashboard</span></a></li>
                        <li><a href="<?= base_url('dashboard/lengkapi_data') ; ?>"><i class="fa fa-user fa-fw">
                                    <div class="icon-bg bg-orange"></div>
                                </i><span class="menu-title">Lengkapi Data</span></a></li>
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->

            <!--BEGIN PAGE WRAPPER-->
            <?php $this->load->view($page) ; ?>
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">2020 © SISFO 360</div>
            </div>
            <!--END FOOTER-->
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?= base_url() ; ?>assets/admin/js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/js/jquery-ui.js"></script>
    <!--loading bootstrap js-->
    <script src="<?= base_url() ; ?>assets/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js">
    </script>
    <script src="<?= base_url() ; ?>assets/admin/js/html5shiv.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/js/respond.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/slimScroll/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/jquery-cookie/jquery.cookie.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/iCheck/icheck.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/iCheck/custom.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/jquery-notific8/jquery.notific8.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/jquery-highcharts/highcharts.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/js/jquery.menu.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/jquery-pace/pace.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/holder/holder.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/responsive-tabs/responsive-tabs.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/moment/moment.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ; ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="<?= base_url() ; ?>assets/admin/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- sweetAlert -->
    <script src="<?= base_url('assets/sweetalert/sweetalert2.js'); ?> "></script>
    <script src="<?= base_url('assets/sweetalert/new_script.js'); ?> "></script>

</body>

</html>