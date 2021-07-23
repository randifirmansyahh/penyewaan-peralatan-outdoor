<?php
  session_start();
  include "session.php";
  echo "<br><br>";
  include "nav.php";
  $nama = $_SESSION['nama_user123'];
  $email = $_SESSION['emailnya'];
  $nomor = $_SESSION['nomornya'];
  $alamat = $_SESSION['alamatnya'];
  $foto = $_SESSION['fotonya'];
  
      echo "
      <div class='row'>
              <div class='col-md-12 grid-margin'>
                <div class='card'>
                <br><br>
      <img class='img-md rounded-circle float-top mx-auto d-block' src='assets/images/pasim.png'>
      <br><br>
      <H3 align='center'>Created By<br><br><h1 align='center'>Randi Firmansyah<br>&<br>Naufal Falah</h1></H3><br><br>
                <h4 align='center'>Projek ini dibuat untuk memenuhi tugas pada mata kuliah Web 2<br>
                </h4><br><br><br>
                  <br><br><br><br>
                  <br>";
        include "footer.php";
      echo "</div>
      </div>
      </div>";
    ?>
</body>
</html>