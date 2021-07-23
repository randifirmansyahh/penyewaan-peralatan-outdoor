<?php
    session_start();
    include "koneksi.php";
    include "session.php";
    $nama = $_SESSION['nama_user123'];
    $qfak=mysqli_query($con,"select * from penyewa");
    echo "<br><br>";
    include "nav.php";
?>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h4>Profile Penyewa</h4>
                          <br>
                        </div>
                          <p>Data penyewa yang telah melakukan registrasi akan ditampilkan disini</p>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              $nomor=0;
                                while ($tfak=mysqli_fetch_array($qfak)) {
                                    $nomor++;
                                    echo "
                                    <tr>
                                        <td align='center'>$nomor</td>
                                        <td><a href='detailpenyewa.php?action=detail&id=$tfak[id]'>$tfak[nama]</a></td>
                                        <td>$tfak[nomor]</td>
                                        <td>$tfak[alamat]</td>
                                        <td><td><button class='btn submit-btn'>";?>
                                        <a href="<?php echo "crudpenyewa.php?action=hapus&id=$tfak[id]";?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus <?php echo "</a></button>
                                    </tr>";
                                  }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <?php
                    include "footer.php";
                    ?>
                  </div>