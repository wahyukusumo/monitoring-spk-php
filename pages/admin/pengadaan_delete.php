<?php
include "../../config.php";
if(isset($_GET['id'])):
     $stmt = $conn->prepare("DELETE FROM pengada WHERE id=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['id'];
 
     if($stmt->execute()):
          echo "<script>alert('Kontrak Berhasil Dihapus');location.href='pengadaan_index.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>