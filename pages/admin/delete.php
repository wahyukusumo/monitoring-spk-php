<?php
include "../../config.php";
if(isset($_GET['id'])):
     $stmt = $conn->prepare("DELETE FROM user WHERE id=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['id'];
 
     if($stmt->execute()):
          echo "<script>alert('Berhasil Menghapus User');location.href='user.php?id=1'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>