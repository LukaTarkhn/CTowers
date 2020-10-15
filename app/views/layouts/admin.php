<!DOCTYPE html>
<html>
<head>
    <?=$this->getMeta();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="/admintemp/">
    <link rel="icon" href="/images/favicons/favicon.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="my.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?=PATH;?>" class="nav-link"  target="_blank">Website</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown show">
                <a class="nav-link" href="/user/logout">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?=ADMIN;?>" class="brand-link">
            <img src="https://calligraphy-towers.com/public/images/grandmaison.png" alt="Logo" class="brand-image"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <!-- <li class="nav-item has-treeview menu-open">
                        <a href="<?=ADMIN;?>/apartment" class="nav-link">
                            <i class="nav-icon far fa-building"></i>
                            <p>
                                A Block
                            </p>
                        </a>
                    </li> -->

                    <li class="nav-item has-treeview menu-open">
                        <a href="<?=ADMIN;?>/bapartment" class="nav-link">
                            <i class="nav-icon far fa-building"></i>
                            <p>
                                B Block
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="<?=ADMIN;?>/armores" class="nav-link">
                            <i class="nav-icon far fa-building"></i>
                            <p>
                                Armores
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="<?=ADMIN;?>/aboutus" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                About us
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="<?=ADMIN;?>/current" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Media
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?=$content;?>
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
    </footer>
</div>
<!-- ./wrapper -->

<script>
    var path = '<?=PATH;?>',
        adminpath ='<?=ADMIN;?>';
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="/js/ajaxupload.js"></script>
<script src="my.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</body>
</html>
