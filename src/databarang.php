<?php
    session_start();
    include "koneksi.php";
    include "session.php";
    $nama = $_SESSION['nama_user123'];
    $qfak=mysqli_query($con,"select * from barangsewa");
    echo "<br><br>";
    include "nav.php";
?>
                <div class="col-md-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h4>Stock Barang</h4>
                          <br>
                        </div>
                          <p>Data Barang sewa yang tersedia akan ditampilkan disini</p>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tersedia</th>
                                <th>Disewa</th>
                                <th>Total Barang</th>
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
                                        <td>$tfak[nama]</td>
                                        ";
                                        
                                        $q = mysqli_query($con,"select sum(banyak) as n from barangdisewa where id=$tfak[id]");
                                        $n = mysqli_fetch_array($q);
                                        
                                        $disewa=$n['n'];
                                        $total=$tfak['banyak'];
                                        $sedia = $total-$disewa;
                                        
                                        
                                        echo "
                                        <td>$sedia</td>
                                        <td>$disewa
                                        <td>$total
                                        <td><button class='btn submit-btn'><a href='updatebarang.php?action=ubah&id=$tfak[id]'>Ubah</a></button>
                                        <td>";?>
                                        <a href="<?php echo "crudbarang.php?action=hapus&id=$tfak[id]";?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus<?php echo "</a></button>
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