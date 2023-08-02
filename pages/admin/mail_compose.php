<?php
  include('../../cek/cekadmin.php');
?>

<?php
include "../../config.php";
if(isset($_POST['bts'])):
     $stmt = $conn->prepare("INSERT INTO mail(untuk,subject,isi) VALUES (?,?,?)");
     $stmt->bind_param('sss', $untuk, $subject, $isi);

     $untuk     = $_POST['untuk'];
     $subject   = $_POST['subject'];
     $isi       = $_POST['isi'];

     if($stmt->execute()):
          echo "<script>alert('Pesan Dimasukan ke Draft');location.href='mail_compose.php'</script>";
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
              <h3 class="box-title">Compose New Message</h3>
              <a href="mail_draft.php" class="pull-right btn btn-primary btn-social"><i class="fa fa-inbox"></i> Lihat Draft</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action=""> 
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="To:" name="untuk">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject:" name="subject">
                </div>
                <div class="form-group">
                      <textarea id="compose-textarea" class="form-control" style="height: 300px" name="isi">

                      </textarea>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" name="bts" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
          </form>
            <!-- /.box-footer -->
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