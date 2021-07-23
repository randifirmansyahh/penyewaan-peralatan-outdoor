<?php
	session_start();
	include "koneksi.php";
	
	$nama_user = $_POST['nama_user'];
	$kata_kunci = $_POST['kata_kunci'];
	
	$qcekdata = mysqli_query($con,"select * from admin where username = '$nama_user' and pass='$kata_kunci'");
	
	if (mysqli_num_rows($qcekdata)>0){
		$tdata = mysqli_fetch_array($qcekdata);
		$_SESSION['id']=$tdata['id'];
		$_SESSION['nama_user123'] = $tdata['username'];
		$_SESSION['kata_kunci123'] = $tdata['pass'];
		$_SESSION['nomornya'] = $tdata['nomor'];
		$_SESSION['emailnya'] = $tdata['email'];
		$_SESSION['alamatnya'] = $tdata['alamat'];
		$_SESSION['fotonya'] = $tdata['foto'];
		 
		header("location:index.php");
	}else{
		header("location:login.php");
	}
?>