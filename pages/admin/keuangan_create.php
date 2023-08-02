<?php
  include('../../cek/cekadmin.php');
?>

<?php
include "../../config.php";
     $res = $conn->query("SELECT * FROM pengada WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include "../../config.php";
if(isset($_POST['bts'])):
     $stmt = $conn->prepare("INSERT INTO keuangan(no_spk,pembayaran,nilai_bayar,tgl_bayar,keterangan,basket) VALUES (?,?,?,?,?,?)");
     $stmt->bind_param('ssssss', $no_spk,$pembayaran,$nilai_bayar,$tgl_bayar,$keterangan,$basket);

     $no_spk            = $_POST['no_spk'];
     $pembayaran        = $_POST['pembayaran'];
     $nilai_bayar       = $_POST['nilai_bayar'];
     $tgl_bayar         = $_POST['tgl_bayar'];
     $keterangan        = $_POST['keterangan'];
     $basket            = $_POST['basket'];

     if($stmt->execute()):
          echo "<script>alert('Berhasil Menambahkan Pembayaran Baru');location.href='keuangan_index.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>

<?php
include "../../config.php";
if(isset($_GET['id'])):
     if(isset($_POST['bts'])):
          $stmt1 = $conn->prepare("UPDATE pengada SET status_bayar=? WHERE id=?");
          $stmt1->bind_param('ss', $status_bayar, $id);
 
            $status_bayar      = $_POST['status_bayar'];
            $id                = $_POST['id'];
 
          if($stmt1->execute()):
               echo "<script>alert('Berhasil Menambahkan Pembayaran Baru');location.href='index.php'</script>";
          else:
               echo "<script>alert('".$stmt1->error."')</script>";
          endif;
     endif;
     $res1 = $conn->query("SELECT * FROM pengada WHERE id=".$_GET['id']);
     $row1 = $res1->fetch_assoc();
?>

<?php
include('../header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-money"></i> Keuangan</a></li>
        <li class="active">Input Pembayan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Detail SPK</h3>
            </div>
            <div class="box-body">
              <!--START FORM-->
                <div class="form-group col-md-6">
                  <h5>No. SPK</h5>
                  <input type="text" class="form-control" value="<?php echo $row['no_spk'] ?>" disabled>   
                </div>
                <div class="form-group col-md-6">
                  <h5>Nama Vendor</h5>
                  <input type="text" class="form-control" value="<?php echo $row['vendor_spk'] ?>" disabled>
                </div>        
                <div class="form-group col-md-6">
                  <h5>Awal SPK</h5>
                  <input type="date" class="form-control" value="<?php echo $row['awal_spk'] ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                  <h5>Akhir SPK</h5>
                  <input type="date" class="form-control" value="<?php echo $row['akhir_spk'] ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                  <h5>Uraian SPK</h5>
                  <input type="text" class="form-control" value="<?php echo $row['uraian_spk'] ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                  <h5>Nilai SPK</h5>
                  <input type="text" class="form-control" value="Rp.<?php echo number_format($row['nilai_spk']) ?>" disabled>
                </div>
                <div class="form-group col-md-6 ">
                  <h5>Basket</h5>
                  <input type="text" class="form-control" value="<?php echo $row['basket'] ?>" disabled>
                </div>  
            </div>
          </div>
          <!--END FORM-->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Input Pembayaran</h3>
            </div>
              <div class="box-body">
                <form method="post" class="form-auth-small">
                  <!--Hidden Input-->
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
                    <input type="hidden" value="<?php echo $row['no_spk'] ?>" name="no_spk">
                    <input type="hidden" value="<?php echo $row['basket'] ?>" name="basket">
                  <!--End-->
                  <div class="form-group">
                    <h5>Pembayaran</h5>
                    <select class="form-control" required="" name="pembayaran">
                      <option value="Pembayaran Total">Pembayaran Total</option>
                      <option value="Pembayaran ke-1">Pembayaran ke-1</option>
                      <option value="Pembayaran ke-2">Pembayaran ke-2</option>
                      <option value="Pembayaran ke-3">Pembayaran ke-3</option>
                      <option value="Pembayaran ke-4">Pembayaran ke-4</option>
                      <option value="Pembayaran ke-5">Pembayaran ke-5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <h5>Nilai</h5>
                    <input type="text" class="form-control" name="nilai_bayar" required="" placeholder="Nilai">
                  </div>
                  <div class="form-group">
                    <h5>Tanggal Pembayaran</h5>
                    <input type="date" class="form-control" required="" name="tgl_bayar">
                  </div>
                  <div class="form-group">
                    <h5>Keterangan</h5>
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                  </div>
                  <div class="form-group">
                    <h5>Status</h5>
                    <select class="form-control" name="status_bayar">
                      <option value="">-</option>
                      <option value="Termin">Termin</option>
                      <option value="Final">Final</option>
                    </select>
                  </div>
                    <div class="col-md-6">
                      <button type="submit" name="bts" class="btn btn-primary btn-md btn-block">Submit</button>
                    </div>
                    <div class="col-md-6 pull-right">
                      <a href="keuangan_index.php"><button type="button" class="btn btn-danger btn-md btn-block" onclick="return confirm('Apakah Anda Yakin Ingin Membatalkan?');">Batal</button></a>
                  </div>
                </form>
              </div>
              <?php
            endif;
              ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<?php
include('../footer.php');
?>