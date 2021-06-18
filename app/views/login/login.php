<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BeritaLSP | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url; ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background: #62AAA8;">
  <div class="login-box mb-5">
    <div class="login-logo" style="color: #1E4657;">
      <b>Berita</b>LSP
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body" style="background: #1E4657;">
        <p class="login-box-msg" style="color: #62AAA8;">Silahkan login terlebih dahulu.</p>
        <form action="<?= base_url; ?>/login/prosesLogin" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ketikkan username.." name="username">
            <div class="input-group-append">
              <div class="input-group-text" style="color: #62AAA8;">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="ketikkan password.." name="password">
            <div class="input-group-append">
              <div class="input-group-text" style="color: #62AAA8;">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block"><i class="nav-icon fas fa-sign-in-alt"></i> Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
    <div class="row">
      <div class="col-sm-12">
        <?php
        Flasher::Message();
        ?>
      </div>
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url; ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url; ?>/dist/js/adminlte.min.js"></script>

</body>

</html>