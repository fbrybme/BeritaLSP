  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #62AAA8; padding-bottom: 5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 style="margin-left: 58%; color: #1E4657;">Halaman User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <?php
          Flasher::Message();
          ?>
        </div>
      </div>
      <div class="card">
        <div class="card-header" style="background: #1E4657;">
          <h3 class="card-title" style="color: #62AAA8;"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/user/simpanuser" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>ID User</label>
              <input type="text" class="form-control" placeholder="masukkan username..." name="id_user">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="masukkan nama..." name="nama">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="masukkan username..." name="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="masukkan password..." name="password">
            </div>
            <div class="form-group">
              <label>Ulangi Password</label>
              <input type="password" class="form-control" placeholder="masukkan ulangi password..." name="ulangi_password">
            </div>
            <button type="submit" class="btn btn-success"><i class="nav-icon fas fa-plus"></i> Add</button>
          </div>
          <!-- /.card-body -->
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->