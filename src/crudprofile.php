<?php
    include "koneksi.php";
    session_start();
    $action=@$_GET['action'];
    $id=$_GET['id'];
    $fb=$_SESSION['fotonya'];
    
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    
    switch ($action) {
        case 'ubah':
            $nama=$_POST['nama'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $nomor=$_POST['nomor'];
            $alamat=$_POST['alamat'];
            mysqli_query($con,"update admin set username='$nama', pass='$pass', email='$email', nomor='$nomor', alamat='$alamat', foto='assets/images/admin/$foto' where id='$id'") or die("salah SQL");
            move_uploaded_file($lokasi,"assets/images/admin/$foto");
            $_SESSION['fotonya']="assets/images/admin/$foto";
            break;
    }
    header("location:profile.php");
?>