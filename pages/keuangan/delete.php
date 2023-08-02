<?php
include "../../config.php";
if(isset($_GET['id'])):
     $stmt = $conn->prepare("DELETE FROM keuangan WHERE id=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['id'];
 
     if($stmt->execute()):
          echo "<script>alert('Pembayaran Berhasil Dihapus');location.href='list.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>