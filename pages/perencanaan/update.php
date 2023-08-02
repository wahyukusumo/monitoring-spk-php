<?php
include('../../cek/cekperencanaan.php');
?>

<?php
include "../../config.php";
if(isset($_GET['id'])):
     if(isset($_POST['bts'])):
          $stmt = $conn->prepare("UPDATE pengada SET bagian=?, status=? WHERE id=?");
          $stmt->bind_param('sss', $bagian, $status, $id);
 
          $bagian         = $_POST['bagian'];
          $status         = $_POST['status'];
          $id             = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>alert('Kontrak Berhasil Diapprove');location.href='index.php'</script>";
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
        Approve SPK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list-alt"></i> Perencanaan</a></li>
        <li class="active">Approve SPK</li>
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
              <?php
                endif;
              ?>
            </div>
          </div>
          <!--END FORM-->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Distribusikan SPK</h3>
            </div>
              <div class="box-body text-center">
                <form method="post" class="form-auth-small">
                  <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
                  <div class="form-group">
                    <h4>Pilih Bagian:</h4>
                      <select name="bagian" class="form-control">
                        <option value="Konstruksi">Konstruksi</option>
                        <option value="Transaksi Energi">Transaksi Energi</option>
                        <option value="Jaringan">Jaringan</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="1" name="status"/ hidden="">
                  </div>
                  <br>
                  <input type="submit"  class="btn btn-primary btn-md btn-block" value="APPROVED" name="bts"/>
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
include('../footer.php');
?>