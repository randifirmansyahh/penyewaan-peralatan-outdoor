<?php
  session_start();
  echo "<br><br>";
  include "koneksi.php";
  include "nav.php";
  $action=@$_GET['action'];
  $id=$_GET['id'];
  $q=mysqli_query($con,"select * from penyewa where id=$id");
  $d=mysqli_fetch_array($q);

      echo "
      <div class='row'>
              <div class='col-md-12 grid-margin'>
                <div class='card'><br>
                <img align='center' style='height : 400x ; width : 400px ; margin-left:auto;margin-right:auto;' src='$d[identitas]'>
                <br>
                <H1 align='center'>
                $d[nama]</H1><br>
                <h4 align='center'>Nomor<br>
                $d[nomor]
                <br><br><br>
                Alamat<br>
                $d[alamat]
                <br><br>
                </h4>
                <button class='btn submit-btn'><a href='updatepenyewa.php?action=ubah&id=$d[id]'><h5>Update Penyewa</a></button>
                <br>
                ";
                ?>
                <div class="footer-text text-center">
                <?php
                  include 'footer.php';
                ?>
                </div>