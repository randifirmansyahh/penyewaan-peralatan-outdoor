<?php
    include "koneksi.php";
    
    $action=@$_GET['action'];
    $id=$_GET['id'];
    
    switch ($action) {
        case 'ubah':
            $nama=$_POST['nama'];
            $banyak=$_POST['banyak'];
            mysqli_query($con,"update barangsewa set nama='$nama', banyak='$banyak' where id='$id'") or die("salah SQL");
            break;
        case 'hapus':
            mysqli_query($con,"delete from barangsewa where id='$id'") or die("salah SQL");
            break;
    }
    header("location:databarang.php");
?>