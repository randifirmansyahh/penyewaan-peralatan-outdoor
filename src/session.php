<?php    
  include "koneksi.php";
  if (empty($_SESSION['nama_user123']) and empty($_SESSION['kata_kunci123'])){
      header("location:login.php");
  }
  $nama = $_SESSION['nama_user123']; 
?>