<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">

    <link rel="shortcut icon" href="<?= base_url('assets/poltek.ico'); ?>">

    <!--Loading bootstrap css-->
    <link type="text/css"
        href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>assets/admin/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.css">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet"
        href="<?= base_url() ; ?>/assets/admin/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/css/themes/style1/pink-blue.css"
        class="default-style">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/css/themes/style1/pink-blue.css"
        id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ; ?>/assets/admin/css/style-responsive.css">
    <link rel="shortcut icon" href="<?= base_url() ; ?>/assets/admin/images/favicon.ico">
</head>

<body id="signin-page">
    <div class="page-form">
        <?php echo form_open('dashboard/login/proses') ?>
        <div class="header-content">
            <h1>Log In</h1>
        </div>
        <div class="body-content">
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" placeholder="Username"
                        name="username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="Password"
                        name="password" class="form-control">
                </div>
            </div>
            <div class="form-group pull-left">
                <div class="checkbox-list"><label><input type="checkbox" name="remember">&nbsp;
                        Keep me signed in</label></div>
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-success">Log In
                    &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <script src="<?= base_url() ; ?>/assets/admin/js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url() ; ?>/assets/admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= base_url() ; ?>/assets/admin/js/jquery-ui.js"></script>
    <!--loading bootstrap js-->
    <script src="<?= base_url() ; ?>/assets/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ; ?>/assets/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js">
    </script>
    <script src="<?= base_url() ; ?>/assets/admin/js/html5shiv.js"></script>
    <script src="<?= base_url() ; ?>/assets/admin/js/respond.min.js"></script>
    <script src="<?= base_url() ; ?>/assets/admin/vendors/iCheck/icheck.min.js"></script>
    <script src="<?= base_url() ; ?>/assets/admin/vendors/iCheck/custom.min.js"></script>

</body>

</html>