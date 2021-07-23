<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css"> 
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body><br><br><br><br>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form name='login' method='post' action='ceklogin.php'>
                <H3 align='center'>PERPUSTAKAAN<br>UNIVERSITAS NASIONAL PASIM</h3>
                <br><br>
                  <div class='form-group'>
                    <label class='label'>Username</label>
                    <div class='input-group'>
                      <input type='text' class='form-control' placeholder='Username' name='nama_user'>
                      <div class='input-group-append'>
                        <span class='input-group-text'>
                          <i class='mdi mdi-check-circle-outline'></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='label'>Password</label>
                    <div class='input-group'>
                      <input type='password' class='form-control' placeholder='*********' name='kata_kunci'>
                      <div class='input-group-append'>
                        <span class='input-group-text'>
                          <i class='mdi mdi-check-circle-outline'></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class='form-group'>
                    <input class='btn btn-primary submit-btn btn-block' type='submit' value='login'>
                  </div>
                </form>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Conditions</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
              <p class="footer-text text-center">copyright © 2020 Randi Firmansyah Project</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Randi Project 2020</span>
        </div>
        <br><br>
        
</footer>
    </body>
</html>