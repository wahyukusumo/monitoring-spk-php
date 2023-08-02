<?php
include('../../cek/cekadmin.php');
?>

<?php
include "../../config.php";
if(isset($_GET['id'])):
     if(isset($_POST['bts'])):
          $stmt = $conn->prepare("UPDATE user SET username=?, password=?, level=? WHERE id=?");
          $stmt->bind_param('ssss', $username, $password, $level, $id);
 
          $username     = $_POST['username'];
          $password     = $_POST['password'];
          $level        = $_POST['level'];
          $id           = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>alert('User Berhasil Diperbaharui');location.href='user.php?id=1'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     $res = $conn->query("SELECT * FROM user WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include "../../config.php";
if(isset($_POST['bts1'])):
     $stmt1 = $conn->prepare("INSERT INTO user(username,password,level) VALUES (?,?,?)");
     $stmt1->bind_param('sss', $username, $password, $level);

     $username  = $_POST['username'];
     $password  = $_POST['password'];
     $level     = $_POST['level'];

     if($stmt1->execute()):
          echo "<script>alert('Berhasil Menambahkan User Baru');location.href='user.php?id=1'</script>";
     else:
          echo "<script>alert('".$stmt1->error."')</script>";
     endif;
endif;
?>

<?php
include "../../config.php";
if(isset($_GET['id'])):
     if(isset($_POST['btsUP'])):
          $stmtUP = $conn->prepare("UPDATE user SET username=?, password=?, level=? WHERE id=?");
          $stmtUP->bind_param('ssss', $username, $password, $level, $id);
 
          $username     = $_POST['username'];
          $password     = $_POST['password'];
          $level        = $_POST['level'];
          $id           = $_POST['id'];
 
          if($stmtUP->execute()):
               echo "<script>alert('User Berhasil Diperbaharui');location.href='user.php?id=1.php'</script>";
          else:
               echo "<script>alert('".$stmtUP->error."')</script>";
          endif;
     endif;
     $res = $conn->query("SELECT * FROM user WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include('../header.php');
?>

<div class="content-wrapper">
  <div class="content-header">
    <section class="content-header">
      <h1>
        Management User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Administrator</a></li>
        <li class="active">User Management</li>
      </ol>
    </section>
  </div>
	<div class="content">
		<div class="row">
			<div class="col-lg-12">
		      <div class="box box-widget widget-user">
		        <div class="widget-user-header bg-black" style="background: url('../../dist/img/photo1.png') center center;">
		          
		        </div>
		        <div class="widget-user-image">
		          <img class="img-circle" src="../../dist/img/<?php echo $row['level'] ?>.png" alt="User Avatar">
		        </div>
		          <div class="box-footer">
		            <div class="row">
		              <div class="col-sm-4 border-right">
		                <div class="description-block">
		                  <h5 class="description-text">USERNAME</h5>
		                  <span class="description-header"><?php echo $row['username'] ?></span>
		                </div>
		              </div>
		              <div class="col-sm-4 border-right">
		                <div class="description-block">
		                  <h5 class="description-text">PASSWORD</h5>
		                  <span class="description-header"><?php echo $row['password']; ?></span>
		              	</div>
		              </div>
		              <div class="col-sm-4">
		                <div class="description-block">
		                  <h5 class="description-text">LEVEL</h5>
		                  <span class="description-header"><?php echo $row['level'] ?></span>
		                </div>
		              </div>
		            </div>
		          </div>
		      </div>
			</div>
			<div class="col-md-8">
				<div class="box box-danger">
					<div class="box-header with-border">
						<span class="fa fa-users"></span>
						<label>Daftar User</label>
					</div>
					<div class="box-body" style=" overflow-y: scroll; height: 400px;">
						<?php
						include('../../config.php');
						$sql = ("SELECT * FROM user");
						$tampil = mysqli_query($conn, $sql) or die (mysqi_error($conn));
						if (mysqli_num_rows($tampil) > 0) {
							while ($data = mysqli_fetch_array($tampil)) { ?>
									<ul class="users-list"">
										<li>
											<a href="user.php?id=<?php echo $data['id'] ?>"><img src="../../dist/img/<?php echo $data['level'] ?>.png" alt="User Image" style="height: 100px";></a>
											<a class="users-list-name" href="#"><?php echo $data['username'] ?></a>
											<a href="delete.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah Anda Yakin?');"><button type="button" class="btn btn-danger btn-xs" data-widget="Hapus" data-toggle="tooltip" title="Hapus"><span class="fa fa-trash"></span></button></a>
										</li/>
									</ul>
							<?php
							}
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-4">
		        <div class="box box-info collapsed-box">
		        	<div class="box-header with-border">
			          <span class="fa fa-user-plus"></span>
			          <h4 class="box-title">Tambah User</h4>
			          	<div class="box-tools pull-right">
                			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
             			</div>
		        	</div>
		           	<div class="box-body">
		            	<form class="form-auth-small" method="post">
			                <h5>Username</h5>
			                <div class="input-group">
			                	<span class="input-group-addon"><i class="fa fa-user"></i></span>
			                	<input type="text" class="form-control" required="" placeholder="Username" name="username"/>
			                </div>
			                <h5>Password</h5>
			                <div class="input-group">
			                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			                    <input type="password" class="form-control" required="" placeholder="Password" name="password"/>
			                </div>
			                <h5>Level</h5>
			                <div class="input-group">
			                    <span class="input-group-addon"><i class="fa fa-navicon"></i></span>
			                    <select class="form-control" required="" name="level">
			                      <option value="Administrator">Administrator</option>
			                      <option value="Pengadaan">Pengadaan</option>
			                      <option value="Perencanaan">Perencanaan</option>
			                      <option value="Konstruksi">Konstruksi</option>
			                      <option value="Transaksi Energi">Transaksi Energi</option>
			                      <option value="Jaringan">Jaringan</option>
			                      <option value="Keuangan">Keuangan</option>
			                    </select>
			                </div>
			                <br>
			                <div class="pull-right">
			                	<button type="submit" name="bts1" class="btn btn-info btn-flat"><i class="fa fa-send-o"></i></button>
			                </div>
		                </form>   
		          	</div>       
		        </div>
	          	<div class="box box-primary">
	            	<div class="box-header with-border">
	              		<span class="fa fa-user"></span>
	              		<h3 class="box-title">Edit User</h3>
	            	</div>
		            <div class="box-body">
		              <!--START FORM-->
		              	<form class="form-auth-small" method="post">
			                <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
			                <div class="form-group">
			                  <h5>Username</h5>
			                  <input type="text" class="form-control" value="<?php echo $row['username'] ?>" name="username"/>
			                </div>
			                <div class="form-group">
			                  <h5>Password</h5>
			                  <input type="text" class="form-control" value="<?php echo $row['password'] ?>" name="password"/>
			                </div>
			                <div class="form-group">
			                  <h5>Level</h5>
			                  <select class="form-control" name="level">
			                    <option value="<?php echo $row['level'] ?>"><?php echo $row['level'] ?></option>
			                    <option disabled=""></option>
			                    <option value="Administrator">Administrator</option>
			                    <option value="Pengadaan">Pengadaan</option>
			                    <option value="Perencanaan">Perencanaan</option>
			                    <option value="Konstruksi">Konstruksi</option>
			                    <option value="Transaksi Energi">Transaksi Energi</option>
			                    <option value="Jaringan">Jaringan</option>
			                    <option value="Keuangan">Keuangan</option>
			                  </select>
			                </div>
		                	<br>
		                  	<input type="submit" class="btn btn-primary pull-right" value="UPDATE" name="bts"/>
	              		</form>
		              	<?php
		                endif;
		              	?>
		              		
	              		<!--END FORM-->
	            	</div>
	         	</div>
	        </div>
		</div>
	</div>
</div>

<?php
endif;
?>

<?php
include('../footer.php');
?>