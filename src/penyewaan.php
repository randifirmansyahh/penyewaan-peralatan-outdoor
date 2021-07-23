<?php
    session_start();
    include "koneksi.php";
    include "session.php";
    $nama = $_SESSION['nama_user123'];
    $qfak=mysqli_query($con,"select b.idP as idP,b.id as id,a.nama,a.nomor,a.alamat,c.id as idB,c.nama as namabarang,b.banyak,d.idB as idBB, d.banyak as banyakdisewa from penyewa a join request b join barangsewa c join barangdisewa d where a.id=b.idP and b.idB=c.id and b.idB=d.idB and c.id=b.idB and c.id=d.idB");
    echo "<br><br>";
    include "nav.php";
?>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h4>Permintaan Penyewaan</h4>
                          <br>
                        </div>
                          <p>Data permintaan sewa yang di ajukan penyewa akan ditampilkan disini</p>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
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
                                        <td><a href='detailpenyewa.php?action=detail&id=$tfak[idP]'>$tfak[nama]</a></td>
                                        <td>$tfak[nomor]</td>
                                        <td>$tfak[alamat]</td>
                                        <td>$tfak[namabarang]</td>
                                        <td>$tfak[banyak]</td>
                                        <td><button class='btn submit-btn'>";?>
                                        <a href="<?php
                                          //stok
                                            $q=mysqli_query($con,"select banyak as stok from barangsewa where id=$tfak[idB]");
                                            $d=mysqli_fetch_array($q);
                                            $banyak=$d['stok'];
                                            
                                            //disewa
                                            $q=mysqli_query($con,"select sum(banyak) as disewa from barangdisewa where id=$tfak[idBB]");
                                            $d=mysqli_fetch_array($q);
                                            $disewa=$d['disewa'];
                                            $sisa=$banyak-$disewa;

                                            //request
                                            $banyak=$tfak['banyak'];

                                            if($sisa<$banyak){
                                              echo "#";
                                              ?>" onclick="return confirm('Mohon Maaf Stock Kurang !')"
                                              <?php
                                            }else{
                                              echo "crudrequest.php?action=konfirmasi&id=$tfak[id]";
                                              ?>" onclick="return confirm('Apakah anda yakin ingin mengkonfirmasi ini ?')"
                                              <?php
                                            }
                                              ?>">Konfirmasi<?php echo "</a></button>
                                              <td><td><button class='btn submit-btn'>";
                                            ?>
                                        <a href="<?php echo "crudrequest.php?action=hapus&id=$tfak[id]";?>" onclick="return confirm('Apakah anda yakin ingin menolak ini ?')">Tolak
                                        </a></button>
                                      </tr>
                                      <?php
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