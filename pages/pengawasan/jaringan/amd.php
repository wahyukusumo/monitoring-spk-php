<?php
include('../../../cek/cekjaringan.php');
?>

<?php
include "../../../config.php";
     $res = $conn->query("SELECT * FROM pengada WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include "../../../config.php";
if(isset($_POST['bts'])):
     $stmt = $conn->prepare("INSERT INTO amandemen(no_spk,vendor_spk,bagian,basket,no_amd,uraian_amd,tgl_amd,akhir_spk,nilai_spk) VALUES (?,?,?,?,?,?,?,?,?)");
     $stmt->bind_param('sssssssss', $no_spk, $vendor_spk, $bagian, $basket, $no_amd, $uraian_amd,$tgl_amd, $akhir_spk, $nilai_spk);

     $no_spk        = $_POST['no_spk'];
     $vendor_spk    = $_POST['vendor_spk'];
     $bagian        = $_POST['bagian'];
     $basket        = $_POST['basket'];
     $no_amd        = $_POST['no_amd'];
     $uraian_amd    = $_POST['uraian_amd'];
     $tgl_amd       = $_POST['tgl_amd'];
     $akhir_spk     = $_POST['akhir_spk'];
     $nilai_spk     = $_POST['nilai_spk'];

     if($stmt->execute()):
          echo "<script>alert('Berhasil Menambahkan Amandemen Baru');location.href='list.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>

<?php
include('../../header1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Amandemen SPK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-camera"></i> Pengawasan</a></li>
        <li>Jaringan</li>
        <li class="active">Amandemen SPK</li>
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
              <h3 class="box-title">Amandemen</h3>
            </div>
              <div class="box-body">
                <form method="post" class="form-auth-small">
                  <!--Hidden Input-->
                    <input type="hidden" class="form-control" value="<?php echo $row['no_spk'] ?>" name="no_spk">
                    <input type="hidden" class="form-control" value="<?php echo $row['vendor_spk'] ?>" name="vendor_spk">
                    <input type="hidden" class="form-control" value="<?php echo $row['bagian'] ?>" name="bagian">
                    <input type="hidden" class="form-control" value="<?php echo $row['basket'] ?>" name="basket">
                  <!--End-->
                  <div class="form-group">
                    <h5>No. Amandemen</h5>
                    <input type="text" class="form-control" name="no_amd" placeholder="No. Amandemen">
                  </div>
                  <div class="form-group">
                    <h5>Uraian Amandemen</h5>
                    <input type="text" class="form-control" name="uraian_amd" placeholder="Uraian Amandemen">
                  </div>
                  <div class="form-group">
                    <h5>Tanggal Amandemen</h5>
                    <input type="date" class="form-control" name="tgl_amd">
                  </div>
                  <div class="form-group col-md-6">
                    <h5>Akhir SPK</h5>
                    <input type="date" class="form-control" value="<?php echo $row['akhir_spk'] ?>" name="akhir_spk">
                  </div>
                  <div class="form-group col-md-6">
                    <h5>Nilai SPK</h5>
                    <input type="text" class="form-control" value="<?php echo $row['nilai_spk'] ?>" name="nilai_spk">
                  </div>
                    <div class="col-md-6">
                      <button type="submit" name="bts" class="btn btn-primary btn-md btn-block">Submit</button>
                    </div>
                    <div class="col-md-6 pull-right">
                      <a href="index.php"><button type="button" class="btn btn-danger btn-md btn-block" onclick="return confirm('Apakah Anda Yakin?');">Cancel</button></a>
                  </div>
                </form>
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