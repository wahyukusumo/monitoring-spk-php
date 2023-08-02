<?php
include('../../../cek/cekkonstruksi.php');
?>

<?php
include('../../../config.php');
?>

<?php
include('../../header1.php');
?>

<?php
  $tgl = date('Y');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Chart</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12" style="margin-bottom: 20px;">
          <form action="" method="post">
            <div class="input-group input-group-md">
              <input type="Number" class="form-control" name="pencarian" placeholder="Pencarian...">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
          </form>
        </div>
<!--=========================================================================================-->                      
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS januari FROM keuangan WHERE MONTH(tgl_bayar) = '1' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS januari FROM keuangan WHERE MONTH(tgl_bayar) = '1' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS januari FROM keuangan WHERE MONTH(tgl_bayar) = '1' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln1 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================-->
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS februari FROM keuangan WHERE MONTH(tgl_bayar) = '2' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS februari FROM keuangan WHERE MONTH(tgl_bayar) = '2' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS februari FROM keuangan WHERE MONTH(tgl_bayar) = '2' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln2 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS maret FROM keuangan WHERE MONTH(tgl_bayar) = '3' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS maret FROM keuangan WHERE MONTH(tgl_bayar) = '3' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS maret FROM keuangan WHERE MONTH(tgl_bayar) = '3' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln3 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS april FROM keuangan WHERE MONTH(tgl_bayar) = '4' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS april FROM keuangan WHERE MONTH(tgl_bayar) = '4' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS april FROM keuangan WHERE MONTH(tgl_bayar) = '4' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln4 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS mei FROM keuangan WHERE MONTH(tgl_bayar) = '5' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS mei FROM keuangan WHERE MONTH(tgl_bayar) = '5' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS mei FROM keuangan WHERE MONTH(tgl_bayar) = '5' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln5 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS juni FROM keuangan WHERE MONTH(tgl_bayar) = '6' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS juni FROM keuangan WHERE MONTH(tgl_bayar) = '6' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS juni FROM keuangan WHERE MONTH(tgl_bayar) = '6' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln6 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS juli FROM keuangan WHERE MONTH(tgl_bayar) = '7' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS juli FROM keuangan WHERE MONTH(tgl_bayar) = '7' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS juli FROM keuangan WHERE MONTH(tgl_bayar) = '7' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln7 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS agustus FROM keuangan WHERE MONTH(tgl_bayar) = '8' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS agustus FROM keuangan WHERE MONTH(tgl_bayar) = '8' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS agustus FROM keuangan WHERE MONTH(tgl_bayar) = '8' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln8 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS september FROM keuangan WHERE MONTH(tgl_bayar) = '9' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS september FROM keuangan WHERE MONTH(tgl_bayar) = '9' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS september FROM keuangan WHERE MONTH(tgl_bayar) = '9' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln9 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS oktober FROM keuangan WHERE MONTH(tgl_bayar) = '10' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS oktober FROM keuangan WHERE MONTH(tgl_bayar) = '10' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS oktober FROM keuangan WHERE MONTH(tgl_bayar) = '10' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln10 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS november FROM keuangan WHERE MONTH(tgl_bayar) = '11' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS november FROM keuangan WHERE MONTH(tgl_bayar) = '11' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS november FROM keuangan WHERE MONTH(tgl_bayar) = '11' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln11 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS desember FROM keuangan WHERE MONTH(tgl_bayar) = '12' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS desember FROM keuangan WHERE MONTH(tgl_bayar) = '12' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS desember FROM keuangan WHERE MONTH(tgl_bayar) = '12' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($bln12 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 


<!--=========================================================================================-->
<!--START CHART KEANDALAN====================================================================-->
<!--=========================================================================================-->
        <div class="col-md-4">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Keandalan</h3>
            </div>
<!--=========================================================================================-->
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_keandalan FROM pengada WHERE basket = 'Keandalan' AND YEAR(awal_spk) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_keandalan FROM pengada WHERE basket = 'Keandalan' AND YEAR(awal_spk) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_keandalan FROM pengada WHERE basket = 'Keandalan' AND YEAR(awal_spk) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($data1 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================-->                      
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_keandalan FROM keuangan WHERE basket = 'Keandalan' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_keandalan FROM keuangan WHERE basket = 'Keandalan' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_keandalan FROM keuangan WHERE basket = 'Keandalan' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($cash1 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <div class="box-body">
                <canvas id="barChart" style="height:250px"></canvas>
            </div>
            <div class="box-footer with-border">
              <table class="table table-striped table-border">
                <thead>
                  <tr>
                    <td><i class="fa fa-square text-gray"></i> <span>Terkontrak</span></td>
                    <td><i class="fa fa-square text-yellow"></i> <span>Terbayar</span></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Rp.<?php echo number_format($data1['kontrak_keandalan']); ?></td>
                    <td>Rp.<?php echo number_format($cash1['bayar_keandalan']); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
         </div>
<!--=========================================================================================-->
<!--END CHART KEANDALAN======================================================================-->
<!--=========================================================================================-->
<!--START CHART EFISIENSI====================================================================-->
<!--=========================================================================================-->
         <div class="col-md-4">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Efisiensi</h3>
            </div>
<!--=========================================================================================-->
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_efisiensi FROM pengada WHERE basket = 'Efisiensi' AND YEAR(awal_spk) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_efisiensi FROM pengada WHERE basket = 'Efisiensi' AND YEAR(awal_spk) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_efisiensi FROM pengada WHERE basket = 'Efisiensi' AND YEAR(awal_spk) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($data2 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================-->                      
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_efisiensi FROM keuangan WHERE basket = 'Efisiensi' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_efisiensi FROM keuangan WHERE basket = 'Efisiensi' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_efisiensi FROM keuangan WHERE basket = 'Efisiensi' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($cash2 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <div class="box-body">
              <canvas id="barChart1" style="height:250px"></canvas>
            </div>
            <div class="box-footer with-border">
              <table class="table table-striped table-border">
                <thead>
                  <tr>
                    <td><i class="fa fa-square text-gray"></i> <span>Terkontrak</span></td>
                    <td><i class="fa fa-square text-red"></i> <span>Terbayar</span></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Rp.<?php echo number_format($data2['kontrak_efisiensi']); ?></td>
                    <td>Rp.<?php echo number_format($cash2['bayar_efisiensi']); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
<!--=========================================================================================-->

<!--=========================================================================================-->
        <div class="col-md-4">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pemasaran</h3>
            </div>
<!--=========================================================================================-->
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_pemasaran FROM pengada WHERE basket = 'Pemasaran' AND YEAR(awal_spk) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_pemasaran FROM pengada WHERE basket = 'Pemasaran' AND YEAR(awal_spk) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_spk) AS kontrak_pemasaran FROM pengada WHERE basket = 'Pemasaran' AND YEAR(awal_spk) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($data3 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================-->                      
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                    if ($pencarian != '') {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_pemasaran FROM keuangan WHERE basket = 'Pemasaran' AND YEAR(tgl_bayar) LIKE '%$pencarian%'";
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_pemasaran FROM keuangan WHERE basket = 'Pemasaran' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    } else {
                      $sql = "SELECT SUM(nilai_bayar) AS bayar_pemasaran FROM keuangan WHERE basket = 'Pemasaran' AND YEAR(tgl_bayar) = '$tgl'";
                    }
                    $sql_tabel = mysqli_query($conn, $sql) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($cash3 = mysqli_fetch_array($sql_tabel)) { ?>
<!--=========================================================================================--> 
            <div class="box-body">
                <canvas id="barChart2" style="height:250px"></canvas>
            </div>
            <div class="box-footer with-border">
                <table class="table table-striped table-border">
                  <thead>
                    <tr>
                      <td><i class="fa fa-square text-gray"></i> <span>Terkontrak</span></td>
                      <td><i class="fa fa-square text-aqua"></i> <span>Terbayar</span></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Rp.<?php echo number_format($data3['kontrak_pemasaran']); ?></td>
                      <td>Rp.<?php echo number_format($cash3['bayar_pemasaran']); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<!--=========================================================================================-->

<!--=========================================================================================-->
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Pembayaran</h3>
              </div>
              <div class="box-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:250px"></canvas>
                </div>
              </div>
              <div class="box-footer with-border" style="overflow-x: scroll;">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center"><i class="fa fa-square"></i></th>
                      <th>Januari</th>
                      <th>Februari</th>
                      <th>Maret</th>
                      <th>April</th>
                      <th>Mei</th>
                      <th>Juni</th>
                      <th>Juli</th>
                      <th>Agustus</th>
                      <th>September</th>
                      <th>Oktober</th>
                      <th>November</th>
                      <th>Desember</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fa fa-square text-blue"></i> <b>Terbayar</b></td>
                      <td>Rp.<?php echo number_format($bln1['januari']);?></td>
                      <td>Rp.<?php echo number_format($bln2['februari']);?></td>
                      <td>Rp.<?php echo number_format($bln3['maret']);?></td>
                      <td>Rp.<?php echo number_format($bln4['april']);?></td>
                      <td>Rp.<?php echo number_format($bln5['mei']);?></td>
                      <td>Rp.<?php echo number_format($bln6['juni']);?></td>
                      <td>Rp.<?php echo number_format($bln7['juli']);?></td>
                      <td>Rp.<?php echo number_format($bln8['agustus']);?></td>
                      <td>Rp.<?php echo number_format($bln9['september']);?></td>
                      <td>Rp.<?php echo number_format($bln10['oktober']);?></td>
                      <td>Rp.<?php echo number_format($bln11['november']);?></td>
                      <td>Rp.<?php echo number_format($bln12['desember']);?></td>
                    </tr>
                      <td><i class="fa fa-square text-gray"></i> <b>Kumulatif</b></td>
                      <td>Rp.<?php echo number_format($bln1['januari']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']+$bln10['oktober']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']+$bln10['oktober']+$bln11['november']);?></td>
                      <td>Rp.<?php echo number_format($bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']+$bln10['oktober']+$bln11['november']+$bln12['desember']);?></td>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </section>
  </div>
 </div>
<!--=========================================================================================-->

<!--=========================================================================================-->
<!-- jQuery 3 -->
<script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../../../bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="../../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* BAR CHART KEANDALAN
     * -------
     * Here we will create a few charts using ChartJS
     */

    var areaChartData = {
      labels  : [''],
      datasets: [
        {
          label               : 'Kontrak',
          fillColor           : '#d2d6de',
          strokeColor         : '#d2d6de',
          pointColor          : '#d2d6de',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $data1['kontrak_keandalan'];?>]
        },
        {
          label               : 'Terbayar',
          fillColor           : '#f39c12',
          strokeColor         : '#f39c12',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $cash1['bayar_keandalan'];?>]
        }
      ]
    }

    //-----------------------
    //- BAR CHART KEANDALAN -
    //-----------------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#f39c12'
    barChartData.datasets[1].strokeColor = '#f39c12'
    barChartData.datasets[1].pointColor  = 'teal'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    /* BAR CHART EFISIENSI
     * -------
     * Here we will create a few charts using ChartJS
     */

    var areaChartData = {
      labels  : [''],
      datasets: [
        {
          label               : 'Kontrak',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $data2['kontrak_efisiensi'];?>]
        },
        {
          label               : 'Terbayar',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $cash2['bayar_efisiensi'];?>]
        }
      ]
    }

    //-----------------------
    //- BAR CHART EFISIENSI -
    //-----------------------
    var barChartCanvas                   = $('#barChart1').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = 'red'
    barChartData.datasets[1].strokeColor = 'red'
    barChartData.datasets[1].pointColor  = 'teal'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

<script>
  $(function () {
    /* BAR CHART PEMASARAN
     * -------
     * Here we will create a few charts using ChartJS
     */

    var areaChartData = {
      labels  : [''],
      datasets: [
        {
          label               : 'Kontrak',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $data3['kontrak_pemasaran'];?>]
        },
        {
          label               : 'Terbayar',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $cash3['bayar_pemasaran'];?>]
        }
      ]
    }

    //-----------------------
    //- BAR CHART PEMASARAN -
    //-----------------------
    var barChartCanvas                   = $('#barChart2').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00c0ef'
    barChartData.datasets[1].strokeColor = '#00c0ef'
    barChartData.datasets[1].pointColor  = 'teal'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>
<script>
  $(function () {
    /* AREA CHART ALL AROUND
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $bln1['januari'];?>, <?php echo $bln1['januari']+$bln2['februari'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']+$bln10['oktober'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']+$bln10['oktober']+$bln11['november'] ?>, <?php echo $bln1['januari']+$bln2['februari']+$bln3['maret']+$bln4['april']+$bln5['mei']+$bln6['juni']+$bln7['juli']+$bln8['agustus']+$bln9['september']+$bln10['oktober']+$bln11['november']+$bln12['desember'] ?>]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $bln1['januari'];?>, <?php echo $bln2['februari'];?>, <?php echo $bln3['maret'];?>, <?php echo $bln4['april'];?>, <?php echo $bln5['mei'];?>, <?php echo $bln6['juni'];?>, <?php echo $bln7['juli'];?>, <?php echo $bln8['agustus'];?>, <?php echo $bln9['september'];?>, <?php echo $bln10['oktober'];?>, <?php echo $bln11['november'];?>, <?php echo $bln12['desember'];?>]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)

  })
</script>
<?php
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
}}
?>
</body>
</html>
