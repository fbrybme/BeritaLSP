  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: #62AAA8; padding-bottom: 5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 style="margin-left: 58%; color: #1E4657;">Halaman Berita</h1>
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
        <form role="form" action="<?= base_url; ?>/berita/simpanberita" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>ID Berita</label>
              <input type="text" class="form-control" placeholder="masukkan id berita..." name="id_berita">
            </div>
            <div class="form-group">
              <label>ID Kategori</label>
              <select class="form-control" name="id_kategori">
                <option value="">Pilih</option>
                <?php foreach ($data['kategori'] as $row) : ?>
                  <option value="<?= $row['id_kategori']; ?>"><?= $row['id_kategori']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" placeholder="masukkan judul berita..." name="judul">
            </div>
            <div class="form-group">
              <label>Isi berita</label>
              <textarea class="form-control" placeholder="masukkan isi berita..." name="isi_berita"></textarea>
            </div>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" placeholder="masukkan tanggal berita..." name="tanggal">
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" class="form-control" placeholder="masukkan gambar berita..." name="gambar" accept="image/*">
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