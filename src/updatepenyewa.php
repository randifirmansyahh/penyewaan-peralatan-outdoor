<?php
  session_start();
  include "session.php";
  include "koneksi.php";
  echo "<br><br>";
  include "nav.php";
  $id=@$_GET['id'];
  $q=mysqli_query($con,"select * from penyewa where id=$id");
  $d=mysqli_fetch_array($q);
?>  
                <form name='login' method='post' action="<?php echo "crudpenyewa.php?action=ubah&id=$id";?>" enctype='multipart/form-data'>
                  <div class='form-group'>
                    <label class='label'>Nama</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='nama' value="<?php echo "$d[nama]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Nomor</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='nomor' value="<?php echo "$d[nomor]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Alamat</label>
                    <div class='input-group'>
                      <input type='text' class='form-control'name='alamat' value="<?php echo "$d[alamat]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Foto</label>
                    <div class='input-group'>
                      <input type='file' class='form-control'name='foto'>
                    </div>
                  </div>
                  <p>*Foto sebelumnya : <?php echo $d['identitas'];?></p>
                  <div class='form-group'>
                    <input class='btn btn-primary submit-btn btn-block' type='submit' value='Update'>
                  </div>
                </form>
                <?php
                    include "footer.php";
                    ?>