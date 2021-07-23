<?php
    include "koneksi.php";
    
    $action=@$_GET['action'];
    $id=$_GET['id'];
    
    switch ($action){
        case 'konfirmasi':
            $q=mysqli_query($con,"select * from request where id=$id") or die("salah SQL");
            $d=$tfak=mysqli_fetch_array($q);
            $idP=$d['idP'];
            $idB=$d['idB'];
            $banyak=$d['banyak'];
            mysqli_query($con,"insert into barangdisewa values(null,$idP,$idB,$banyak,1)") or die("salah SQL");
            mysqli_query($con,"delete from request where id='$id'") or die("salah SQL");
            break;
        case 'hapus':
            mysqli_query($con,"delete from request where id='$id'") or die("salah SQL");
            break;
    }
    header("location:penyewaan.php");
?>