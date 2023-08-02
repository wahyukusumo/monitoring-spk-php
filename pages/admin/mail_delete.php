<?php
include "../../config.php";
if(isset($_GET['id'])):
     $stmt = $conn->prepare("DELETE FROM mail WHERE id=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['id'];
 
     if($stmt->execute()):
          echo "<script>alert('Berhasil Menghapus Draft');location.href='mail_draft.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>