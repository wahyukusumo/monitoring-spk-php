<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  
include('../../config.php');
  
if($_POST['submit']){
  $password_lama        = $_POST['password_lama'];
  $password_baru        = $_POST['password_baru'];
  $konfirmasi_password  = $_POST['konfirmasi_password'];
    
  $cek      = $conn->query("SELECT password FROM user WHERE password='$password_lama'");
    
  if($cek->num_rows){
    if(strlen($password_baru) >= 5){
      if($password_baru == $konfirmasi_password){
        $id_user    = $_SESSION['username'];
          
        $update     = $conn->query("UPDATE user SET password='$password_baru' WHERE username='$id_user'");
          if($update){
              $sukses = '<div class="alert alert-success">Berhasil Merubah Password</div>';
            }else{
            $gagal = '<div class="alert alert-danger">Gagal Merubah Password <br> <b>Coba Lagi</b></div>';
          }         
        }else{
          $unconfirm = '<div class="alert alert-warning">Konfirmasi password tidak cocok <br> <b>Coba Lagi</b></div>';
        }
      }else{
        $info = '<div class="alert alert-info">Minimal password baru <br> adalah 5 karakter<br> <b>Coba Lagi</b></div>';
      }
    }else{
      $error = '<div class="alert alert-danger">Password lama tidak cocok <br> <b>Coba Lagi</b></div>';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring SPK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.dataTables.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"  
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M.</b>SP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Monitoring</b>SPK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/<?php echo $_SESSION['level']; ?>.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/<?php echo $_SESSION['level']; ?>.png " class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['username']; ?>
                  <small>PT. PLN Persero Distribusi Banten Area Cikokol</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <a href="../../logout.php" class="btn btn-default btn-flat btn-block btn-md">Sign out</a>
                <button type="button" class="btn btn-default btn-flat btn-block" data-toggle="modal" data-target="#change_pass">
                Ubah Password
              </button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/<?php echo $_SESSION['level']; ?>.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-television"></i> <span>Monitoring</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="monitor_kontrak.php"><i class="fa fa-circle-o text-light-blue"></i>Monitoring Kontrak</a></li>
            <li><a href="monitor_amd.php"><i class="fa fa-circle-o text-light-blue"></i>Monitoring Amandemen</a></li>
            <li><a href="monitor_pembayaran.php"><i class="fa fa-circle-o text-light-blue"></i>Monitoring Pembayaran</a></li>
          </ul>
        </li> 
        <?php
        if($_SESSION['level'] == "Pengadaan") {
          echo "<li class=\"active\">";
          echo "<a href=\"index.php\">";
          echo "<i class=\"fa fa-file-text-o\"></i> <span>Pengadaan</span>";
          echo "</a>";
          echo "</li>";
        } else if($_SESSION['level'] == "Administrator") {
          echo "<li>";
          echo "<a href=\"pengadaan_index.php\">";
          echo "<i class=\"fa fa-file-text-o\"></i> <span>Pengadaan</span>";
          echo "</a>";
          echo "</li>";
        } else{
          echo "<li>";
          echo "<a href=\"#\">";
          echo "<i class=\"fa fa-file-text-o\"></i> <span>Pengadaan</span>";
          echo "</a>";
          echo "</li>";
        }
        ?>
        <?php
        if($_SESSION['level'] == "Perencanaan") {
          echo "<li class=\"active\">";
          echo "<a href=\"index.php\">";
          echo "<i class=\"fa fa-list-alt\"></i> <span>Perencanaan</span>";
          echo "</a>";
          echo "</li>";
        } else if($_SESSION['level'] == "Administrator") {
          echo "<li>";
          echo "<a href=\"perencanaan_index.php\">";
          echo "<i class=\"fa fa-list-alt\"></i> <span>Perencanaan</span>";
          echo "</a>";
          echo "</li>";
        } else{
          echo "<li>";
          echo "<a href=\"#\">";
          echo "<i class=\"fa fa-list-alt\"></i> <span>Perencanaan</span>";
          echo "</a>";
          echo "</li>";
        }
        ?>

        <?php
        if ($_SESSION['level'] == "Administrator") {
          echo "<li class=\"treeview\">";
          echo "<a href=\"#\">";
          echo "<i class=\"fa fa-camera\"></i> <span>Pengawas</span>";  
          echo "<span class=\"pull-right-container\">";  
          echo "<i class=\"fa fa-angle-left pull-right\"></i>";        
          echo "</span></a>";      
          echo "<ul class=\"treeview-menu\">";
          echo "<li><a href=\"konstruksi_index.php\"><i class=\"fa fa-wrench text-light-blue\"></i>Konstruksi</a></li>";
          echo "<li><a href=\"transenergi_index.php\"><i class=\"fa fa-expand text-light-blue\"></i>Transaksi Energi</a></li>";  
          echo "<li><a href=\"jaringan_index.php\"><i class=\"fa fa-bolt text-light-blue\"></i>Jaringan</a></li>";  
          echo "</ul></li> ";
        } else {
          echo "<li class=\"treeview\">";
          echo "<a href=\"#\">";
          echo "<i class=\"fa fa-camera\"></i> <span>Pengawas</span>";  
          echo "<span class=\"pull-right-container\">";  
          echo "<i class=\"fa fa-angle-left pull-right\"></i>";        
          echo "</span></a>";      
          echo "<ul class=\"treeview-menu\">";
          echo "<li><a href=\"#\"><i class=\"fa fa-wrench text-light-blue\"></i>Konstruksi</a></li>";
          echo "<li><a href=\"#\"><i class=\"fa fa-expand text-light-blue\"></i>Transaksi Energi</a></li>";  
          echo "<li><a href=\"#\"><i class=\"fa fa-bolt text-light-blue\"></i>Jaringan</a></li>";  
          echo "</ul></li> ";
        }
        ?>
        <?php
        if($_SESSION['level'] == "Keuangan") {
          echo "<li class=\"active\">";
          echo "<a href=\"index.php\">";
          echo "<i class=\"fa fa-money\"></i> <span>Keuangan</span>";
          echo "</a>";
          echo "</li>";
        } else if($_SESSION['level'] == "Administrator") {
          echo "<li>";
          echo "<a href=\"keuangan_index.php\">";
          echo "<i class=\"fa fa-money\"></i> <span>Keuangan</span>";
          echo "</a>";
          echo "</li>";
        } else{
          echo "<li>";
          echo "<a href=\"#\">";
          echo "<i class=\"fa fa-money\"></i> <span>Keuangan</span>";
          echo "</a>";
          echo "</li>";
        }
        ?>
        <?php
        if ($_SESSION['level'] == "Administrator") {
          echo "<li class=\"header\">ADMIN MENU</li>";
          echo "<li><a href=\"user.php?id=1\"><i class=\"fa fa-users\"></i> <span>User Menu</span></a></li>";
        }
        ?>
        <li class="header" hidden="">
        </li>
        <li>
          <?php echo
            "$sukses
            $gagal
            $unconfirm
            $info
            $error"
          ?>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="modal fade" id="change_pass">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-key"></i> Ubah Password</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <input type="password" name="password_lama" required placeholder="Password Lama" class="form-control" style="margin-bottom: 10px;">
          <input type="password" name="password_baru" required placeholder="Password Baru" class="form-control" style="margin-bottom: 10px;">
          <input type="password" name="konfirmasi_password" required placeholder="Konfirmasi Password" class="form-control" style="margin-bottom: 20px;">
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-md btn-flat" value="Ubah Password">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>