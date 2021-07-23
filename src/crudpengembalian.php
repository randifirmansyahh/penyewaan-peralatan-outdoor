<?php
    include "koneksi.php";
    
    $action=@$_GET['action'];
    $id=$_GET['id'];
    
    switch ($action) {
        case 'selesai':
            mysqli_query($con,"delete from barangdisewa where id='$id'") or die("salah SQL");
            break;
    }
    header("location:pengembalian.php");
?>