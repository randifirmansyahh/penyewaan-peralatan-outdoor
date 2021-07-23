<?php
  session_start();
  include "session.php";
  include "koneksi.php";
  echo "<br><br>";
  include "nav.php";
  $id=@$_GET['id'];
  $q=mysqli_query($con,"select * from barangsewa where id=$id");
  $d=mysqli_fetch_array($q);

?>  
                <form name='login' method='post' action="<?php echo "crudbarang.php?action=ubah&id=$id";?>">
                  <div class='form-group'>
                    <label class='label'>Nama</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='nama' value="<?php echo "$d[nama]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Banyak Barang</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' name='banyak' value="<?php echo "$d[banyak]";?>">
                    </div>
                  </div>
                  <div class='form-group'>
                    <input class='btn btn-primary submit-btn btn-block' type='submit' value='Update'>
                  </div>
                </form>
                <?php
                    include "footer.php";
                    ?>