<?php
  session_start();
  include "session.php";
  include "koneksi.php";
  echo "<br><br>";
  include "nav.php";
  $id=$_SESSION['id'];
  $fotonya=$_SESSION['fotonya'];

  $q=mysqli_query($con,"select * from admin where id='$id'");
  $d=mysqli_fetch_array($q);
?>  
                <form name='login' method='post' action="<?php echo "crudprofile.php?action=ubah&id=$id";?>" enctype='multipart/form-data'>
                  <div class='form-group'>
                    <label class='label'>Username</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='nama' value="<?php echo "$d[username]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Password</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='pass' value="<?php echo "$d[pass]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Email</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='email' value="<?php echo "$d[email]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Nomor Telepon</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='nomor' value="<?php echo "$d[nomor]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Alamat</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='alamat' value="<?php echo "$d[alamat]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Foto</label>
                    <div class='input-group'>
                      <input type='file' class='form-control' name='foto'>
                    </div>
                  </div>
                      <p>*Foto sebelumnya : <?php echo $fotonya ?></p>
                  <div class='form-group'>
                    <input class='btn btn-primary submit-btn btn-block' type='submit' value='Update'>
                  </div>
                </form>
                <?php
                    include "footer.php";
                    ?>