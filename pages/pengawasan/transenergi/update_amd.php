<?php
include('../../../cek/cektransenergi.php');
?>

<?php
include "../../../config.php";
     $res = $conn->query("SELECT * FROM pengada WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>
<?php
include "../../../config.php";
if(isset($_POST['bts'])):
     $stmt = $conn->prepare("UPDATE amandemen SET no_spk=?, vendor_spk=?, no_amd=?, uraian_amd=?, tgl_amd=?, akhir_spk=?, nilai_spk=? WHERE id=?");
     $stmt->bind_param('ssssssss', $no_spk, $vendor_spk, $no_amd, $uraian_amd,$tgl_amd, $akhir_spk, $nilai_spk, $id);

     $no_spk        = $_POST['no_spk'];
     $vendor_spk    = $_POST['vendor_spk'];
     $no_amd        = $_POST['no_amd'];
     $uraian_amd    = $_POST['uraian_amd'];
     $tgl_amd       = $_POST['tgl_amd'];
     $akhir_spk     = $_POST['akhir_spk'];
     $nilai_spk     = $_POST['nilai_spk'];
     $id            = $_POST['id'];

      if($stmt->execute()):
               echo "<script>alert('Amandemen Berhasil Di Update');location.href='list.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     $res = $conn->query("SELECT * FROM amandemen WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include('../../header1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Amandemen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-camera"></i> Pengawasan</a></li>
        <li>Transaksi Energi</li>
        <li class="active">Update Amandemen</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Amandemen</h3>
            </div>
              <div class="box-body">
                <form method="post" class="form-auth-small">
                  <!--Hidden Input-->
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
                    <input type="hidden" class="form-control" value="<?php echo $row['no_spk'] ?>" name="no_spk">
                    <input type="hidden" class="form-control" value="<?php echo $row['vendor_spk'] ?>" name="vendor_spk">
                    <input type="hidden" class="form-control" value="<?php echo $row['bagian'] ?>" name="bagian">
                    <input type="hidden" class="form-control" value="<?php echo $row['basket'] ?>" name="basket">
                  <!--End-->
                  <div class="form-group">
                    <h5>No. Amandemen</h5>
                    <input type="text" class="form-control" value="<?php echo $row['no_amd'] ?>" name="no_amd" placeholder="No. Amandemen">
                  </div>
                  <div class="form-group">
                    <h5>Uraian Amandemen</h5>
                    <input type="text" class="form-control" value="<?php echo $row['uraian_amd'] ?>" name="uraian_amd" placeholder="Uraian Amandemen">
                  </div>
                  <div class="form-group">
                    <h5>Tanggal Amandemen</h5>
                    <input type="date" class="form-control" value="<?php echo $row['tgl_amd'] ?>" name="tgl_amd">
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
                      <button type="submit" name="bts" class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-md-6 pull-right">
                      <a href="index.php"><button type="button" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Apakah Anda Yakin?');"><i class="fa fa-close"></i></button></a>
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