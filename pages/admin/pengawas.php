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
        Pengawas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Administrator</a></li>
        <li class="active">Pengawas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pengawas - Konstruksi</h3>
            </div>
            <div class="box-body text-center">
              <i class="fa fa-wrench" style="font-size: 250px;"></i>
            </div>
            <div class="box-footer with-border">
              <a href="konstruksi_index.php"><button style="margin-bottom: 8px;" class="btn btn-flat btn-default btn-block">Daftar SPK</button></a>
              <a href="konstruksi_list.php"><button class="btn btn-flat btn-default btn-block">Daftar Amandemen</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pengawas - Transaksi Energi</h3>
            </div>
            <div class="box-body text-center">
              <i class="fa fa-expand" style="font-size: 250px;"></i>
            </div>
            <div class="box-footer with-border">
              <a href="transenergi_index.php"><button style="margin-bottom: 8px;" class="btn btn-flat btn-default btn-block">Daftar SPK</button></a>
              <a href="transenergi_list.php"><button class="btn btn-flat btn-default btn-block">Daftar Amandemen</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pengawas - Jaringan</h3>
            </div>
            <div class="box-body text-center">
              <i class="fa fa-bolt" style="font-size: 250px;"></i>
            </div>
            <div class="box-footer with-border">
              <a href="jaringan_index.php"><button style="margin-bottom: 8px;" class="btn btn-flat btn-default btn-block">Daftar SPK</button></a>
              <a href="jaringan_list.php"><button class="btn btn-flat btn-default btn-block">Daftar Amandemen</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
include('../footer.php');
?>