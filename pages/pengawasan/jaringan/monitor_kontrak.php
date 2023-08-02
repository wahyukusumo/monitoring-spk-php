<?php
  include('../../../cek/cekjaringan.php');
?>

<?php
include('../../header1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Monitoring
        <small>Kontrak</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-television"></i> Monitoring</a></li>
        <li class="active">Monitoring Kontrak</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div style="margin-bottom: 20px;" class="pull-left">
                <form class="form-inline" action="" method="post">
                  <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No. SPK</th>
                      <th>Vendor</th>
                      <th>Awal SPK</th>
                      <th>Akhir SPK</th>
                      <th>Uraian SPK</th>
                      <th>Nilai SPK</th>
                      <th>Basket</th>
                      <th>Progress</th>
                      <th>Fisik</th>
                      <th>Status Bayar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include '../../../config.php' ?>
                    <?php
                    $batas = 10;
                    $hal = @$_GET['hal'];
                    if (empty($hal)) {
                      $posisi = 0;
                      $hal  = 1;
                    } else {
                      $posisi = ($hal - 1) * $batas;
                    }
                    $no = 1;
                      if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                        if ($pencarian != '') {
                          $sql = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress FROM pengada JOIN pengawas ON pengada.id = pengawas.id 
                                  WHERE pengada.status='1' AND pengada.no_spk LIKE '%$pencarian%'
                                  OR pengada.vendor_spk LIKE '%$pencarian%'
                                  OR pengada.basket LIKE '%$pencarian%'";
                          $query = $sql;
                          $queryJml = $sql;
                        } else {
                          $query = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress FROM pengada JOIN pengawas ON pengada.id = pengawas.id 
                                  WHERE pengada.status='1'
                                  LIMIT $posisi, $batas";
                          $queryJml = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress FROM pengada JOIN pengawas ON pengada.id = pengawas.id 
                                  WHERE pengada.status='1'";
                          $no = $posisi + 1;
                        }
                      } else {
                        $query = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress FROM pengada JOIN pengawas ON pengada.id = pengawas.id 
                                  WHERE pengada.status='1'
                                  LIMIT $posisi, $batas";
                        $queryJml = "SELECT pengada.id, pengada.no_spk, pengada.vendor_spk, pengada.awal_spk, pengada.akhir_spk, pengada.uraian_spk, pengada.nilai_spk, pengada.basket, pengada.bagian, pengada.status_bayar, pengawas.progress FROM pengada JOIN pengawas ON pengada.id = pengawas.id 
                                  WHERE pengada.status='1'";
                        $no = $posisi + 1;
                      }
                    
                    $sql_tabel = mysqli_query($conn, $query) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($data = mysqli_fetch_array($sql_tabel)) { ?>
                        <tr>
                          <td><?php echo $data['no_spk']; ?></td>
                          <td><?php echo $data['vendor_spk']; ?></td>
                          <td><?php echo $data['awal_spk']; ?></td>
                          <td><?php echo $data['akhir_spk']; ?></td>
                          <td><?php echo $data['uraian_spk']; ?></td>
                          <td>Rp.<?php echo number_format($data['nilai_spk']); ?></td>
                          <td><?php echo $data['basket']; ?></td>
                          <td>
                            <div class="progress progress-sm progress-striped active">
                              <div class="progress-bar progress-bar-primary" style="width: <?php echo $data['progress']; ?>%"></div>
                            </div>
                          </td>
                          <td class="text-center"><span class="badge bg-light-blue"><?php echo $data['progress']; ?>%</span></td>
                          <td class="text-center">
                            <?php 
                            $qty = $data['status_bayar'];
                            if ($qty == 'Termin') {
                               echo "<span class=\"badge bg-yellow\">Termin</span>";
                             } elseif ($qty == 'Final') {
                               echo "<span class=\"badge bg-light-blue\">Final</span>";
                             } elseif ($qty == 'Kosong') {
                               echo "<span class=\"badge bg-grey\"</span>";
                             }
                            ?>
                          </td>
                        </tr>
                      <?php
                      }
                    } else {
                      echo "<tr><td colspan=\"9\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="box-footer with-border">
                <div style="float: right;">
                  <ul class="pagination pagination-sm">
                    <?php
                      if ($hal == 1) {
                    ?>
                      <li class="disabled"><a href="#">First</a></li>
                      <li class="disabled"><a href="#">&laquo;</a></li>
                    <?php
                    } else {
                      $link_prev = ($page > 1) ? $page - 1 : 1;
                    ?>
                      <li><a href="monitor_kontrak.php?page=1">First</a></li>
                      <li><a href="monitor_kontrak.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
                    <?php
                      }
                    ?>
                    <?php
                      $sql2 = $pdo->prepare("SELECT COUNT(*) AS jumlah FROM pengada");
                      $sql2->execute();
                      $get_jumlah = $sql2->fetch();
                      $jumlah_page = ceil($get_jumlah['jumlah'] / $batas);
                      $jumlah_number = 3; 
                      $start_number = ($hal > $jumlah_number) ? $hal - $jumlah_number : 1;
                      $end_number = ($hal < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page;
                        for ($i = $start_number; $i <= $end_number; $i++) {
                          $link_active = ($hal == $i) ? 'class="active"' : '';
                    ?>
                        <li <?php echo $link_active; ?>><a href="monitor_kontrak.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                      }
                    ?>
                    <?php
                      if ($hal == $jumlah_page) {
                    ?>
                      <li class="disabled"><a href="#">&raquo;</a></li>
                      <li class="disabled"><a href="#">Last</a></li>
                    <?php
                    } else {
                      $link_next = ($hal < $jumlah_page) ? $hal + 1 : $jumlah_page;
                    ?>
                      <li><a href="monitor_kontrak.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                      <li><a href="monitor_kontrak.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
                    <?php
                      }
                    ?>
                  </ul>
                </div>
                <div class="pull-left" style="margin-top: 21px;">
                  <a href="../../../export_kontrak.php" target="_BLANK"><button type="submit" class="btn btn-block btn-social btn-success btn-sm"><i class="fa fa-file-excel-o"></i>Export</button></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<?php
include('../../footer1.php');
?>