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
        <li class="active"><a href="export_kontrak.php"><i class="fa fa-link"></i> <span>Monitoring Kontrak</span></a></li>
        <li><a href="export_amd.php"><i class="fa fa-link"></i> <span>Monitoring Amandemen</span></a></li>
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
        Monitoring Kontrak
        <small>Excel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file-excel-o"></i> Export</a></li>
        <li class="active">Monitoring Kontrak</li>
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
						<table class="table table-bordered">
						 	<tr>
								<th rowspan="4" class="text-center">NO. SPK</th>
								<th rowspan="4" class="text-center">VENDOR</th>
								<th rowspan="4" class="text-center">TANGGAL AWAL</th>
								<th rowspan="4" class="text-center">TANGGAL AKHIR</th>
								<th rowspan="4" class="text-center">URAIAN</th>
								<th rowspan="4" class="text-center">NILAI</th>
								<th rowspan="4" class="text-center">BASKET</th>
								<th rowspan="4" class="text-center">PROGRESS</th>
								<th colspan="6" class="text-center">JTM</th>
								<th colspan="8" class="text-center">TRAFO</th>
								<th colspan="6" class="text-center">JTR</th>
								<th colspan="6" class="text-center">KUBIKEL TM</th>
								<th colspan="6" class="text-center">KUBIKEL GI</th>
								<th colspan="26" class="text-center">APP</th>
								<th rowspan="4" class="text-center">KETERANGAN</th>
								<th rowspan="4" class="text-center">RENCANA BAYAR</th>
								<th rowspan="4" class="text-center">STATUS BAYAR</th>
							</tr>
							<tr>
								<th colspan="2" rowspan="2" class="text-center">SUTM</th>
								<th colspan="2" rowspan="2" class="text-center">SKUTM</th>
								<th colspan="2" rowspan="2" class="text-center">SKTM</th>
								<th rowspan="3" class="text-center">100 kVA</th>
								<th rowspan="3" class="text-center">160 kVA</th>
								<th rowspan="3" class="text-center">200 kVA</th>
								<th rowspan="3" class="text-center">250 kVA</th>
								<th rowspan="3" class="text-center">315 kVA</th>
								<th rowspan="3" class="text-center">400 kVA</th>
								<th rowspan="3" class="text-center">630 kVA</th>
								<th rowspan="3" class="text-center">1000 kVA</th>
								<th rowspan="3" class="text-center">RAK TR</th>
								<th rowspan="3" class="text-center">SKTR</th>
								<th colspan="2" rowspan="2" class="text-center">SUTR</th>
								<th colspan="2" rowspan="2" class="text-center">SR</th>
								<th colspan="3" rowspan="2" class="text-center">AIR INSULATED</th>
								<th colspan="3" rowspan="2" class="text-center">FULLY INSULATED</th>
								<th rowspan="3" class="text-center">INCOMING</th>
								<th rowspan="3" class="text-center">KOPEL</th>
								<th rowspan="3" class="text-center">OUTGOING</th>
								<th rowspan="3" class="text-center">RISER</th>
								<th rowspan="3" class="text-center">CELL VT</th>
								<th rowspan="3" class="text-center">PS</th>
								<th colspan="5" rowspan="2" class="text-center">KWH</th>
								<th colspan="20" class="text-center">PEMBATAS</th>
							</tr>
							<tr>
								<th colspan="8" class="text-center">1 PHASE</th>
								<th colspan="6" class="text-center">3 PHASE</th>
								<th colspan="7" class="text-center">MCCB</th>
							</tr>
							<tr>
								<th>AAC/S 150 mm2</th>
								<th>AAC/S 240 mm2</th>
								<th>MVTIC 150 mm2</th>
								<th>MVTIC 240 mm2</th>
								<th>XLPE 240 mm2</th>
								<th>XLPE 240 mm2</th>
								<th>TIC 3x70 + 50 mm2</th>
								<th>TIC 3x95 + 50 mm2</th>
								<th>TIC 2x10 mm2</th>
								<th>TIC 2x16 mm2</th>
								<th>LBS</th>
								<th>PB</th>
								<th>CBOM</th>
								<th>LBS</th>
								<th>PB</th>
								<th>CBOM</th>
								<th>KWH 1 Phase Prabayar</th>
								<th>KWH 1 Phase Reguler</th>
								<th>KWH Elektrik 3 Phase Kecil</th>
								<th>KWH AMR 3 Phase Besar</th>
								<th>KWH AMR 3 Phase TM</th>
								<th>2A</th>
								<th>4A</th>
								<th>6A</th>
								<th>10A</th>
								<th>16A</th>
								<th>25A</th>
								<th>35A</th>
								<th>50A</th>
								<th>10A</th>
								<th>16A</th>
								<th>20A</th>
								<th>25A</th>
								<th>35A</th>
								<th>50A</th>
								<th>63A</th>
								<th>80A</th>
								<th>100A</th>
								<th>150A</th>
								<th>200A</th>
								<th>250A</th>
								<th>300A</th>
						 	</tr>
						 	<?php include 'config.php';
								if ($_SERVER['REQUEST_METHOD'] == "POST") {
									$pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
									if ($pencarian != '') {
										$sql =  "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress, pengawas.a3c150, pengawas.a3c240, pengawas.mvtic150, pengawas.mvtic240, pengawas.xlpe240, pengawas.xlpe300, pengawas.trafo100kva, pengawas.trafo160kva, pengawas.trafo200kva, pengawas.trafo250kva, pengawas.trafo315kva, pengawas.trafo400kva, pengawas.trafo630kva, pengawas.trafo1000kva, pengawas.raktr, pengawas.sktr, pengawas.tic370, pengawas.tic395, pengawas.tic210, pengawas.tic216, pengawas.ai_lbs, pengawas.ai_pb, pengawas.ai_cbom, pengawas.fi_lbs, pengawas.fi_pb, pengawas.fi_cbom, pengawas.incoming, pengawas.kopel, pengawas.outgoing, pengawas.riser, pengawas.cellvt, pengawas.ps, pengawas.kwh1pp, pengawas.kwh1pr, pengawas.kwhe3pk, pengawas.kwha3pb, pengawas.kwha3pt, pengawas.p12a, pengawas.p14a, pengawas.p16a, pengawas.p110a, pengawas.p116a, pengawas.p125a, pengawas.p135a, pengawas.p150a, pengawas.p310a, pengawas.p316a, pengawas.p320a, pengawas.p325a, pengawas.p335a, pengawas.p350a, pengawas.mccb63, pengawas.mccb80, pengawas.mccb100, pengawas.mccb150, pengawas.mccb200, pengawas.mccb250, pengawas.mccb300, pengawas.lain, pengawas.ren_bayar FROM pengada JOIN pengawas ON pengada.id = pengawas.id WHERE pengada.no_spk LIKE '%$pencarian%' OR pengada.vendor_spk LIKE '%$pencarian%' OR pengada.basket LIKE '%$pencarian%'";
										$query = $sql;
									} else {
										$query = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress, pengawas.a3c150, pengawas.a3c240, pengawas.mvtic150, pengawas.mvtic240, pengawas.xlpe240, pengawas.xlpe300, pengawas.trafo100kva, pengawas.trafo160kva, pengawas.trafo200kva, pengawas.trafo250kva, pengawas.trafo315kva, pengawas.trafo400kva, pengawas.trafo630kva, pengawas.trafo1000kva, pengawas.raktr, pengawas.sktr, pengawas.tic370, pengawas.tic395, pengawas.tic210, pengawas.tic216, pengawas.ai_lbs, pengawas.ai_pb, pengawas.ai_cbom, pengawas.fi_lbs, pengawas.fi_pb, pengawas.fi_cbom, pengawas.incoming, pengawas.kopel, pengawas.outgoing, pengawas.riser, pengawas.cellvt, pengawas.ps, pengawas.kwh1pp, pengawas.kwh1pr, pengawas.kwhe3pk, pengawas.kwha3pb, pengawas.kwha3pt, pengawas.p12a, pengawas.p14a, pengawas.p16a, pengawas.p110a, pengawas.p116a, pengawas.p125a, pengawas.p135a, pengawas.p150a, pengawas.p310a, pengawas.p316a, pengawas.p320a, pengawas.p325a, pengawas.p335a, pengawas.p350a, pengawas.mccb63, pengawas.mccb80, pengawas.mccb100, pengawas.mccb150, pengawas.mccb200, pengawas.mccb250, pengawas.mccb300, pengawas.lain, pengawas.ren_bayar FROM pengada JOIN pengawas ON pengada.id = pengawas.id";
									}
									} else {
										$query = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress, pengawas.a3c150, pengawas.a3c240, pengawas.mvtic150, pengawas.mvtic240, pengawas.xlpe240, pengawas.xlpe300, pengawas.trafo100kva, pengawas.trafo160kva, pengawas.trafo200kva, pengawas.trafo250kva, pengawas.trafo315kva, pengawas.trafo400kva, pengawas.trafo630kva, pengawas.trafo1000kva, pengawas.raktr, pengawas.sktr, pengawas.tic370, pengawas.tic395, pengawas.tic210, pengawas.tic216, pengawas.ai_lbs, pengawas.ai_pb, pengawas.ai_cbom, pengawas.fi_lbs, pengawas.fi_pb, pengawas.fi_cbom, pengawas.incoming, pengawas.kopel, pengawas.outgoing, pengawas.riser, pengawas.cellvt, pengawas.ps, pengawas.kwh1pp, pengawas.kwh1pr, pengawas.kwhe3pk, pengawas.kwha3pb, pengawas.kwha3pt, pengawas.p12a, pengawas.p14a, pengawas.p16a, pengawas.p110a, pengawas.p116a, pengawas.p125a, pengawas.p135a, pengawas.p150a, pengawas.p310a, pengawas.p316a, pengawas.p320a, pengawas.p325a, pengawas.p335a, pengawas.p350a, pengawas.mccb63, pengawas.mccb80, pengawas.mccb100, pengawas.mccb150, pengawas.mccb200, pengawas.mccb250, pengawas.mccb300, pengawas.lain, pengawas.ren_bayar FROM pengada JOIN pengawas ON pengada.id = pengawas.id";
									}
						                    
									$sql_tabel = mysqli_query($conn, $query) or die (mysqli_error($conn));
									if (mysqli_num_rows($sql_tabel) > 0) {
									while ($row = mysqli_fetch_array($sql_tabel)) { ?>
						 <tbody>
						 	<tr>
								<td><?php echo $row['no_spk'] ?></td>
								<td><?php echo $row['vendor_spk'] ?></td>
								<td><?php echo $row['awal_spk'] ?></td>
								<td><?php echo $row['akhir_spk'] ?></td>
								<td><?php echo $row['uraian_spk'] ?></td>
								<td>Rp.<?php echo number_format($row['nilai_spk']) ?></td>
								<td><?php echo $row['basket'] ?></td>
								<td><?php echo $row['progress'] ?>%</td>
								<td><?php echo $row['a3c150'] ?></td>
								<td><?php echo $row['a3c240'] ?></td>
								<td><?php echo $row['mvtic150'] ?></td>
								<td><?php echo $row['mvtic240'] ?></td>
								<td><?php echo $row['xlpe240'] ?></td>
								<td><?php echo $row['xlpe300'] ?></td>
								<td><?php echo $row['trafo100kva'] ?></td>
								<td><?php echo $row['trafo160kva'] ?></td>
								<td><?php echo $row['trafo200kva'] ?></td>
								<td><?php echo $row['trafo250kva'] ?></td>
								<td><?php echo $row['trafo315kva'] ?></td>
								<td><?php echo $row['trafo400kva'] ?></td>
								<td><?php echo $row['trafo630kva'] ?></td>
								<td><?php echo $row['trafo1000kva'] ?></td>
								<td><?php echo $row['raktr'] ?></td>
								<td><?php echo $row['sktr'] ?></td>
								<td><?php echo $row['tic370'] ?></td>
								<td><?php echo $row['tic395'] ?></td>
								<td><?php echo $row['tic210'] ?></td>
								<td><?php echo $row['tic216'] ?></td>
								<td><?php echo $row['ai_lbs'] ?></td>
								<td><?php echo $row['ai_pb'] ?></td>
								<td><?php echo $row['ai_cbom'] ?></td>
								<td><?php echo $row['fi_lbs'] ?></td>
								<td><?php echo $row['fi_pb'] ?></td>
								<td><?php echo $row['fi_cbom'] ?></td>
								<td><?php echo $row['incoming'] ?></td>
								<td><?php echo $row['kopel'] ?></td>
								<td><?php echo $row['outgoing'] ?></td>
								<td><?php echo $row['riser'] ?></td>
								<td><?php echo $row['cellvt'] ?></td>
								<td><?php echo $row['ps'] ?></td>
								<td><?php echo $row['kwh1pp'] ?></td>
								<td><?php echo $row['kwh1pr'] ?></td>
								<td><?php echo $row['kwhe3pk'] ?></td>
								<td><?php echo $row['kwha3pb'] ?></td>
								<td><?php echo $row['kwha3pt'] ?></td>
								<td><?php echo $row['p12a'] ?></td>
								<td><?php echo $row['p14a'] ?></td>
								<td><?php echo $row['p16a'] ?></td>
								<td><?php echo $row['p110a'] ?></td>
								<td><?php echo $row['p116a'] ?></td>
								<td><?php echo $row['p125a'] ?></td>
								<td><?php echo $row['p135a'] ?></td>
								<td><?php echo $row['p150a'] ?></td>
								<td><?php echo $row['p310a'] ?></td>
								<td><?php echo $row['p316a'] ?></td>
								<td><?php echo $row['p320a'] ?></td>
								<td><?php echo $row['p325a'] ?></td>
								<td><?php echo $row['p335a'] ?></td>
								<td><?php echo $row['p350a'] ?></td>
								<td><?php echo $row['mccb63'] ?></td>
								<td><?php echo $row['mccb80'] ?></td>
								<td><?php echo $row['mccb100'] ?></td>
								<td><?php echo $row['mccb150'] ?></td>
								<td><?php echo $row['mccb200'] ?></td>
								<td><?php echo $row['mccb250'] ?></td>
								<td><?php echo $row['mccb300'] ?></td>
								<td><?php echo $row['lain'] ?></td>
								<td><?php echo $row['ren_bayar'] ?></td>
								<td><?php echo $row['status_bayar'] ?></td>
							</tr>
								<?php
								}
								} else {
									echo "<tr><td colspan=\"70\" class=\"bg-red\" align=\"center\">Data Tidak Ditemukan</td></tr>";
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
    					<form action="action_kontrak.php" method="post" class="pull-right">
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