<?php

$error=''; 

include "config.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
                    
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = '<div class="alert alert-danger">Username atau Password Salah</div>';
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == "Administrator")
        {
            header("Location: pages/admin/dashboard.php");
        }
        else if($row['level'] =="Pengadaan")
        {
            header("Location: pages/pengadaan/dashboard.php");
        }
        else if($row['level'] =="Perencanaan")
        {
            header("Location: pages/perencanaan/dashboard.php");
        }
        else if($row['level'] =="Keuangan")
        {
            header("Location: pages/keuangan/dashboard.php");
        }
        else if($row['level'] =="Konstruksi")
        {
            header("Location: pages/pengawasan/konstruksi/dashboard.php");
        }
        else if($row['level'] =="Transaksi Energi")
        {
            header("Location: pages/pengawasan/transenergi/dashboard.php");
        }
        else if($row['level'] =="Jaringan")
        {
            header("Location: pages/pengawasan/jaringan/dashboard.php");
        }
    }
}           
?>

