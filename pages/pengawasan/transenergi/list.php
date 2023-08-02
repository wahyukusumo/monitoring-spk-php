<?php
include('../../../cek/cektransenergi.php');
?>

<?php
include('../../header1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Amandemen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-camera"></i> Pengawasan</a></li>
        <li>Transaksi Energi</li>
        <li class="active">Daftar Amandemen</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <form class="form-inline pull-left" action="" method="post">
                <div class="form-group">
                  <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true"></span></button>
                </div>
              </form>
              <a href="index.php" class="pull-right"><button class="btn btn-block btn-social btn-default"><i class="ion ion-clipboard"></i>Daftar SPK</button></a>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No. SPK</th>
                      <th>Vendor</th>
                      <th>No. Amandemen</th>
                      <th>Uraian</th>
                      <th>Tanggal Amandemen</th>
                      <th>Akhir SPK</th>
                      <th>Nilai Amandemen</th>
                      <th class="text-center"><i class="fa fa-cog"></i></th>  
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
                          $sql = "SELECT * FROM amandemen
                                  WHERE bagian='Transaksi Energi'
                                  AND no_spk LIKE '%$pencarian%'
                                  OR vendor_spk LIKE '%$pencarian%'
                                  OR no_amd LIKE '%$pencarian%'
                                  LIMIT $posisi, $batas";
                          $query = $sql;
                          $queryJml = $sql;
                        } else {
                          $query = "SELECT * FROM amandemen WHERE bagian='Transaksi Energi' LIMIT $posisi, $batas";
                          $queryJml = "SELECT * FROM amandemen WHERE bagian='Transaksi Energi'";
                          $no = $posisi + 1;
                        }
                      } else {
                        $query = "SELECT * FROM amandemen WHERE bagian='Transaksi Energi' LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM amandemen WHERE bagian='Transaksi Energi'";
                        $no = $posisi + 1;
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
                          <td class="text-center">
                            <a href="update_amd.php?id=<?php echo $data['id'] ?>"><button type="button" class="btn btn-default btn-xs" data-widget="Edit" data-toggle="tooltip" title="Edit"><span class="fa fa-edit"></span></button></a>
                            <a href="delete.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin?');"><button type="button" class="btn btn-danger btn-xs" data-widget="Hapus" data-toggle="tooltip" title="Hapus"><span class="fa fa-trash"></span></button></a>
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
                              <li><a href="list.php?page=1">First</a></li>
                              <li><a href="list.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
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
                              <li <?php echo $link_active; ?>><a href="list.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
                              <li><a href="list.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                              <li><a href="list.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
                          <?php
                          }
                          ?>
                      </ul>
                  </div>
                <?php
                  echo "<div style=\"float:left;\">";
                  $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
                  echo "Jumlah Data : <b>$jml</b>";
                  echo "</div>";
              ?>
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