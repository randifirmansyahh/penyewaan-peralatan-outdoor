<?php
    session_start();
    include "koneksi.php";
    include "session.php";
    $nama = $_SESSION['nama_user123'];
    $qfak=mysqli_query($con,"select b.id as id,a.nama as nama,a.nomor,a.alamat,c.nama as namabarang, b.banyak from penyewa a join barangdisewa b join barangsewa c where a.id=b.idP and b.idB=c.id");
    echo "<br><br>";
    include "nav.php";
?>
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4>Pengembalian Barang</h4>
                          <br>
                        </div>
                          <p>Data penyewa dan barang yang belum di kembalikan akan ditampilkan disini</p>
                          <br>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Nama Barang</th>
                                <th>Banyak</th>
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
                                        <td>$tfak[namabarang]</td>
                                        <td>$tfak[banyak]</td>
                                        <td>";?>
                                        <a href="<?php echo "crudpengembalian.php?action=selesai&id=$tfak[id]";?>" onclick="return confirm('Apakah anda yakin bahwa <?php echo "$tfak[nama]"; ?> telah melakukan pengembalian barang ?')">Konfirmasi<?php echo "</a></button>
                                        </td></tr>";
                                  }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <?php
                    include "footer.php";
                    ?>