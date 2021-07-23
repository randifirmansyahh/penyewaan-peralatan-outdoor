<?php
    include "koneksi.php";
    
    $action=@$_GET['action'];
    $id=$_GET['id'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    
    switch ($action) {
        case 'ubah':
            $nama=$_POST['nama'];
            $nomor=$_POST['nomor'];
            $alamat=$_POST['alamat'];
            mysqli_query($con,"update penyewa set nama='$nama', nomor='$nomor', alamat='$alamat', identitas='assets/images/penyewa/$foto' where id='$id'") or die("salah SQL");
            move_uploaded_file($lokasi,"assets/images/penyewa/$foto");
            break;
        case 'hapus':
            mysqli_query($con,"delete from penyewa where id='$id'") or die("salah SQL");
            mysqli_query($con,"delete from request where id='$id'") or die("salah SQL");
            break;
    }
    header("location:detailpenyewa.php?action=detail&id=$id");
?>