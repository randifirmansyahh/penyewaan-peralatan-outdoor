<?php
  session_start();
  echo "<br><br>";
  include "nav.php";
  $id = $_SESSION['id'];
  $nama = $_SESSION['nama_user123'];
  $email = $_SESSION['emailnya'];
  $nomor = $_SESSION['nomornya'];
  $alamat = $_SESSION['alamatnya'];
  $foto = $_SESSION['fotonya'];
  
      echo "
      <div class='row'>
              <div class='col-md-12 grid-margin'>
                <div class='card'>
                <br>
                <img align='center' style='height : 200x ; width : 200px ; margin-left:auto;margin-right:auto;'  src='$foto'>
                <br>
                <H1 align='center'>Hai 
                $nama</H1><br>
                <h4 align='center'>Email<br>
                $email
                <br><br>
                  Telepon<br>$nomor
                <br><br>
                  Alamat<br>
                  $alamat
                </h4><br>
                  <h5 align='center'><a href='updateprofile.php?action=ubah&id=$id'>Update Profile</a></h5><br>";?>
                  <h5 align='center'><a href='logout.php' onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a></h5>
                  <br>
                  <?php
                    include "footer.php";
                    ?>