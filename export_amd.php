<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>M.SPK | Export</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M.</b>SP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Monitoring</b>SPK</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="text-center">
          <i class="fa fa-file-excel-o text-success" style="font-size: 150px;"></i>
        </div>
        <br>
        <h4 class="text-success"><b>EXPORT EXCEL PAGE</b></h4>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="export_kontrak.php"><i class="fa fa-link"></i> <span>Monitoring Kontrak</span></a></li>
        <li class="active"><a href="export_amd.php"><i class="fa fa-link"></i> <span>Monitoring Amandemen</span></a></li>
        <li><a href="export_pembayaran.php"><i class="fa fa-link"></i> <span>Monitoring Pembayaran</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Monitoring Amandemen
        <small>Excel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file-excel-o"></i> Export</a></li>
        <li class="active">Monitoring Amandemen</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    	<div class="row">
    		<div class="col-xs-12">
    			<div class="box box-success">
    				<div class="box-header with-border">
						<form class="form-inline pull-left" action="" method="post">
							<div class="form-group">
								<input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success"><span class="fa fa-search" aria-hidden="true"></span></button>
							</div>
						</form>
    				</div>
    				<div class="box-body" style="overflow: scroll;">
						<table class="table table-bordered" ">
							<thead>
								<tr>
									<th>No. SPK</th>
									<th>Vendor</th>
									<th>No. Amandemen</th>
									<th>Uraian</th>
									<th>Tanggal</th>
									<th>Akhir SPK</th>
									<th>Nilai SPK</th>  
								</tr>
							</thead>
							<tbody>
								<?php include 'config.php';
									if ($_SERVER['REQUEST_METHOD'] == "POST") {
										$pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
											if ($pencarian != '') {
											$sql = "SELECT * FROM amandemen WHERE no_spk LIKE '%$pencarian%' OR vendor_spk LIKE '%$pencarian%' OR no_amd LIKE '%$pencarian%'";
											$query = $sql;
										} else {
											$query = "SELECT * FROM amandemen";
										}
										} else {
											$query = "SELECT * FROM amandemen";
										}
										$sql_tabel = mysqli_query($conn, $query) or die (mysqli_error($conn));
											if (mysqli_num_rows($sql_tabel) > 0) {
											while ($data = mysqli_fetch_array($sql_tabel)) { ?>
												<tr>
													<td><?php echo $data['no_spk']; ?></td>
													<td><?php echo $data['vendor_spk']; ?></td>
													<td><?php echo $data['no_amd']; ?></td>
													<td><?php echo $data['uraian_amd']; ?></td>
													<td><?php echo $data['tgl_amd']; ?></td>
													<td><?php echo $data['akhir_spk']; ?></td>
													<td>Rp.<?php echo number_format($data['nilai_spk']); ?></td>
												</tr>
										<?php
										}
										} else {
											echo "<tr><td colspan=\"7\" align=\"center\">Data Tidak Ditemukan</td></tr>";
										}
									?>
							</tbody>
						</table>
    				</div>
    				<div class="box-footer with-border">
						<?php
							echo "<div style=\"float:left;\">";
							$jml = mysqli_num_rows(mysqli_query($conn, $query));
							echo "Jumlah Data : <b>$jml</b>";
							echo "</div>";
						?>

    					<form action="action_amandemen.php" method="post" class="pull-right">
							<input type="hidden" name="export" value="<?php echo $query?>">
							<button type="submit" class="btn btn-flat btn-success btn-social"><i class="fa fa-file-excel-o"></i> EXPORT EXCEL</button>
						</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>