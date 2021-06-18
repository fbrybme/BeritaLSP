  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #62AAA8; padding-bottom: 5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 style="margin-left: 58%; color: #1E4657;">Halaman Berita</h1>
            <hr style="margin-left: 42%;">
            <a class="btn btn-primary" href="home" role="button" style="margin-left: 60%; margin-top: 5px;"><i class="nav-icon fas fa-sign-out-alt"></i> Dashboard Admin</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content" style="color: #62AAA8;">
      <div class="row">
        <div class="col-sm-12">
          <?php
          Flasher::Message();
          ?>
        </div>
      </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-body" style="background: #1E4657;">
          <?php foreach ($data['berita'] as $row) : ?>
            <h1><?= $row['judul']; ?></h1>
            <p><i class="fa fa-clock"></i> <?= $row['tanggal']; ?> <i class="fa fa-eye" style="margin-left: 5px;"></i> 21k <i class="fa fa-heart" style="margin-left: 5px;"></i> 372 <i class="fas fa-user" style="margin-left: 5px;"></i> Posting by MFH</p>
            <hr>
            <div class="media">
              <a href="#">
                <img class="media-object " src="<?= $row['gambar']; ?>" width="300px" height="200px">
              </a>
              <div class="media-body">
                <p style="margin-left: 10px;"><?= $row['isi_berita']; ?></p>
                <a href="https://www.kompas.com/">
                  <button class="btn btn-primary" style="margin-left: 10px;">Read More</button>
                </a>
              </div>
              </p>
            </div>
          <?php endforeach; ?>
          <hr>
          <div class="" style="margin-left: 32%;">
            <a href="https://twitter.com/twitter" class="btn btn-primary" style="margin: 5px;"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="https://id.linkedin.com/" class="btn btn-warning" style="margin: 5px;"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            <a href="https://id-id.facebook.com/" class="btn btn-info" style="margin: 5px;"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->