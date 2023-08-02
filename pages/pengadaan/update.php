<?php
include('../../cek/cekpengadaan.php');
?>

<?php
include "../../config.php";
if(isset($_GET['id'])):
     if(isset($_POST['bts'])):
          $stmt = $conn->prepare("UPDATE pengada SET no_spk=?, vendor_spk=?, awal_spk=?, akhir_spk=?, uraian_spk=?, nilai_spk=?, basket=? WHERE id=?");
          $stmt->bind_param('ssssssss', $no_spk, $vendor_spk, $awal_spk, $akhir_spk, $uraian_spk, $nilai_spk, $basket, $id);
 
          $no_spk         = $_POST['no_spk'];
          $vendor_spk     = $_POST['vendor_spk'];
          $awal_spk       = $_POST['awal_spk'];
          $akhir_spk      = $_POST['akhir_spk'];
          $uraian_spk     = $_POST['uraian_spk'];
          $nilai_spk      = $_POST['nilai_spk'];
          $basket         = $_POST['basket'];
          $id             = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>alert('Kontrak Berhasil Diperbaharui');location.href='index.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     $res = $conn->query("SELECT * FROM pengada WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include('../header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update SPK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file-text"></i> Pengadaan</a></li>
        <li class="active">Update SPK</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body">
              <!--START FORM-->
              <form class="form-auth-small" method="post">
                <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
                <div class="form-group">
                  <h5>No. SPK</h5>
                  <input type="text" class="form-control" value="<?php echo $row['no_spk'] ?>" name="no_spk"/>   
                </div>
                <div class="form-group">
                  <h5>Nama Vendor</h5>
                  <input type="text" class="form-control" value="<?php echo $row['vendor_spk'] ?>" name="vendor_spk"/>
                </div>
                <div class="form-group">
                  <h5>Awal SPK</h5>
                  <input type="date" class="form-control" value="<?php echo $row['awal_spk'] ?>" name="awal_spk"/>
                </div>
                <div class="form-group">
                  <h5>Akhir SPK</h5>
                  <input type="date" class="form-control" value="<?php echo $row['akhir_spk'] ?>" name="akhir_spk"/>
                </div>
                <div class="form-group">
                  <h5>Uraian SPK</h5>
                  <input type="text" class="form-control" value="<?php echo $row['uraian_spk'] ?>" name="uraian_spk"/>
                </div>
                <div class="form-group">
                  <h5>Nilai SPK</h5>
                  <input type="text" class="form-control" value="<?php echo $row['nilai_spk'] ?>" name="nilai_spk"/>
                </div>
                <div class="form-group">
                  <h5>Basket</h5>
                  <select class="form-control" name="basket"/>
                    <option value="<?php echo $row['basket'] ?>"><?php echo $row['basket'] ?></option>
                    <option disabled=""></option>
                    <option value="Keandalan">Keandalan</option>
                    <option value="Efisiensi">Efisiensi</option>
                    <option value="Pemasaran">Pemasaran</option>
                  </select>
                </div>
                <br>
                  <input type="submit"  class="btn btn-primary btn-block" value="UPDATE" name="bts"/>
              </form>
              <?php
                endif;
              ?>
              <!--END FORM-->
            </div>
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