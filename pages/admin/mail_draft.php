<?php
  include('../../cek/cekadmin.php');
?>

<?php
include('../header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Administrator</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Draft</h3>
              <a href="mail_compose.php" class="pull-right btn btn-primary btn-social"><i class="fa fa-pencil"></i> Tulis Email</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered taable-hover">
                  <tbody>
                    <?php include '../../config.php' ?>
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
                          $sql = "SELECT * FROM mail WHERE untuk LIKE '%$pencarian%' OR subject LIKE '%$pencarian%' OR basket LIKE '%$pencarian%' LIMIT $posisi, $batas";
                          $query = $sql;
                          $queryJml = $sql;
                        } else {
                          $query = "SELECT * FROM mail LIMIT $posisi, $batas";
                          $queryJml = "SELECT * FROM mail";
                          $no = $posisi + 1;
                        }
                      } else {
                        $query = "SELECT * FROM mail LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM mail";
                        $no = $posisi + 1;
                      }
                    
                    $sql_tabel = mysqli_query($conn, $query) or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_tabel) > 0) {
                      while ($data = mysqli_fetch_array($sql_tabel)) { ?>
                        <tr>
                          <td><a href="mail_edit.php?id=<?php echo $data['id'] ?>"><?php echo $data['untuk']; ?></a></td>
                          <td><b><?php echo $data['subject']; ?></b> - <?php echo $data['isi']; ?></td>
                          <td class="text-center">
                            <a href="mail_delete.php?id=<?php echo $data['id'] ?>"><button type="button" class="btn btn-danger btn-xs" data-widget="Hapus" data-toggle="tooltip" title="Hapus"><span class="fa fa-trash"></span></button></a>
                            <a href="#"><button type="button" class="btn btn-info btn-xs" data-widget="Send" data-toggle="tooltip" title="Send"><span class="fa fa-send"></span></button></a>
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
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- ./wrapper -->

<!-- Page Script -->

<?php
include('../footer.php');
?>

<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>