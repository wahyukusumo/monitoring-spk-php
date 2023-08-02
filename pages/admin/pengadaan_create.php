<?php
  include('../../cek/cekadmin.php');
?>

<?php
include "../../config.php";
if(isset($_POST['bts'])):
     $stmt = $conn->prepare("INSERT INTO pengada(no_spk,vendor_spk,awal_spk,akhir_spk,uraian_spk,nilai_spk,basket) VALUES (?,?,?,?,?,?,?)");
     $stmt->bind_param('sssssss', $no_spk, $vendor_spk, $awal_spk, $akhir_spk, $uraian_spk, $nilai_spk, $basket);

     $no_spk        = $_POST['no_spk'];
     $vendor_spk    = $_POST['vendor_spk'];
     $awal_spk      = $_POST['awal_spk'];
     $akhir_spk     = $_POST['akhir_spk'];
     $uraian_spk    = $_POST['uraian_spk'];
     $nilai_spk     = $_POST['nilai_spk'];
     $basket        = $_POST['basket']; 

     if($stmt->execute()):
          echo "<script>alert('Berhasil Menambahkan Kontrak Baru');location.href='pengadaan_index.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>

<?php
include('../header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input SPK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file-text"></i> Pengadaan</a></li>
        <li class="active">Input SPK</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body">
                <form class="form-auth-small" method="post">
                  <div class="col-xs-12">
                    <div class="form-group">
                    <h5>No. SPK</h5>
                    <input type="text" class="form-control" placeholder="No" required="" name="no_spk"/>
                  </div>
                  <div class="form-group">
                    <h5>Vendor SPK</h5>
                    <input type="text" class="form-control" placeholder="Vendor" required="" name="vendor_spk"/>
                  </div>
                  <div class="form-group">
                    <h5>Awal SPK</h5>
                    <input type="date" class="form-control" placeholder="Awal" required="" name="awal_spk"/>
                  </div>
                  <div class="form-group">
                    <h5>Akhir SPK</h5>
                    <input type="date" class="form-control" placeholder="Akhir" required="" name="akhir_spk"/>
                  </div>
                  <div class="form-group">
                    <h5>Uraian SPK</h5>
                    <input type="textarea" class="form-control" placeholder="Uraian" required="" name="uraian_spk"/>
                  </div>
                  <div class="form-group">
                    <h5>Nilai SPK</h5>
                    <input type="text" class="form-control" placeholder="Nilai" required="" name="nilai_spk"/>
                  </div>
                  <div class="form-group">
                    <h5>Basket</h5>
                    <select class="form-control" required="" name="basket">
                      <option value="Keandalan">Keandalan</option>
                      <option value="Efisiensi">Efisiensi</option>
                      <option value="Pemasaran">Pemasaran</option>
                    </select>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-primary btn-sm btn-block" value="SUBMIT" name="bts"/>
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
include('../footer.php')
?>