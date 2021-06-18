  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #62AAA8;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 style="margin-left: 58%; color: #1E4657;">Halaman Kategori</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header" style="background: #1E4657;">
          <h3 class="card-title" style="color: #62AAA8;"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/kategori/simpankategori" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>ID Kategori</label>
              <input type="text" class="form-control" placeholder="masukkan id kategori..." name="id_kategori">
            </div>
            <div class="form-group">
              <label>Nama Kategori</label>
              <input type="text" class="form-control" placeholder="masukkan kategori..." name="nama_kategori">
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