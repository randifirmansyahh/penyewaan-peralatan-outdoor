<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php    
  session_start();
  include "koneksi.php";
  include "session.php";
  $nama = $_SESSION['nama_user123'];
  echo "<br><br>";
  include "nav.php";

  // tenda
  $q=mysqli_query($con,"select sum(banyak) as n from barangdisewa where idB='2'");
  $n = mysqli_fetch_array($q);
  $dt=$n['n'];                              

  $q = mysqli_query($con,"select sum(banyak) as n from barangsewa where id='2'");
  $n = mysqli_fetch_array($q);
  $tt=$n['n'];

  //sleeping bag
  $q=mysqli_query($con,"select sum(banyak) as n from barangdisewa where idB='3'");
  $n = mysqli_fetch_array($q);
  $ds=$n ['n'];

  $q=mysqli_query($con,"select sum(banyak) as n from barangsewa where id='3'");
  $n = mysqli_fetch_array($q);
  $ts=$n['n'];

  //alat masak
  $q=mysqli_query($con,"select sum(banyak) as n from barangdisewa where idB='4'");
  $n = mysqli_fetch_array($q);
  $da=$n ['n'];

  $q=mysqli_query($con,"select sum(banyak) as n from barangsewa where id='4'");
  $n = mysqli_fetch_array($q);
  $ta=$n['n'];

  // matras
  $q=mysqli_query($con,"select sum(banyak) as n from barangdisewa where idB='1'");
  $n = mysqli_fetch_array($q);
  $dm=$n['n'];

  $q = mysqli_query($con,"select sum(banyak) as n from barangsewa where id='1'");
  $n = mysqli_fetch_array($q);
  $tm=$n['n'];

  //all
  $q=mysqli_query($con,"select sum(banyak) as n from barangsewa");
  $data = mysqli_fetch_array($q);
  $totalbarang=$data['n'];
  $q=mysqli_query($con,"select sum(banyak) as n from barangdisewa");
  $data = mysqli_fetch_array($q);
  $totaldisewa=$data['n'];

  ?>    

            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <h4 align='left'>Barang Tersedia</h4><br><br>
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">
                            <?php
                            echo $tm-$dm;
                            ?></h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Matras</h5>
                            <p class="mb-0 text-muted"><?php
                              echo "+$dm(";
                              echo $dm/$tm*100;
                              echo "%)"
                            ?></p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="<?php echo $dm/$tm*100;?>" width="100" id="stats-line-graph-1"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"><?php
                              echo $tt-$dt;
                            ?>
                            </h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Tenda</h5>
                            <p class="mb-0 text-muted"><?php
                              echo $dt;
                              echo "(+";
                              echo $dt/$tt*100;
                              echo "%)";
                            ?></p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="<?php echo $dt/$tt*100*2;?>" width="100" id="stats-line-graph-2"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"><?php echo $ts;?></h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Sleeping Bag</h5>
                            <p class="mb-0 text-muted">+<?php echo "$ds";
                                echo "(+";
                                echo $ds/$ts*100;
                                echo "%)";
                                ?>
                                </p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="<?php echo $ds/$ts*100*2;?>" width="100" id="stats-line-graph-3"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"><?php echo $ta;?></h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Alat Masak Portable</h5>
                            <p class="mb-0 text-muted"><?php echo $da;
                            echo "(+";
                            echo $da/$ta*100;
                            echo "%)";
                            ?>
                            </p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="<?php $da/$ta*2;?>" width="100" id="stats-line-graph-4"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>                
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body"> 
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Total Barang Tersedia</p>
                            </div>
                            <h4 class="font-weight-semibold">
                            <?php
                              $c=$totalbarang-$totaldisewa;
                              echo $c;
                              $c=$c/$totalbarang*100
                            ?>
                            </h4>
                            <div class="progress progress-md">
                            <?php
                              echo "<div class='progress-bar bg-danger' role='progressbar' style='width:$c%' aria-valuenow='78' aria-valuemin='0' aria-valuemax='78'>";  
                            ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Total Barang Tersewa</p>
                            </div>
                            <h4 class="font-weight-semibold">
                            <?php
                              echo $totaldisewa;
                              $c=$totaldisewa/$totalbarang*100
                            ?>
                            </h4>
                            <div class="progress progress-md">
                            <?php
                            
                            echo "<div class='progress-bar bg-success' role='progressbar' style='width: $totaldisewa%' aria-valuenow='45' aria-valuemin='0' aria-valuemax='45'></div>
                            </div>       
                          </div>
                        </div>
                      </div>
                    </div>";
                    ?>
                  </div>
                </div>
              </div>
          <?php
            include "footer.php";
          ?></footer>
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <script src="assets/js/demo_1/dashboard.js"></script>
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>