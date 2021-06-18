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
    <section class="content" style="color: #62AAA8;">
      <div class="row">
        <div class="col-sm-12">
          <?php
          Flasher::Message();
          ?>
        </div>
      </div>
      <!-- Default box -->
      <div class="card" style="background: #1E4657;">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url; ?>/user/tambah" class="btn float-right btn-xs btn btn-primary"><i class="nav-icon fas fa-plus"></i> Tambah User</a>
        </div>
        <div class="card-body">
          <form action="<?= base_url; ?>/user/cari" method="post">
            <div class="row mb-3">
              <div class="col-lg-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" name="key">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" style="color: #62AAA8;"><i class="nav-icon fas fa-search"></i> Cari Data</button>
                    <a class="btn btn-outline-secondary" href="<?= base_url; ?>/user" style="color: #62AAA8;"><i class="nav-icon fas fa-sync-alt"></i> Reset</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <table class="table table-bordered">
            <thead>
              <tr style="text-align: center;">
                <th style="width: 10px">No.</th>
                <th>ID User</th>
                <th>Nama</th>
                <th>Username</th>
                <th style="width: 150px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['user'] as $row) : ?>
                <tr style="text-align: center;">
                  <td><?= $no; ?></td>
                  <td><?= $row['id_user']; ?></td>
                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['username']; ?></td>
                  <td>
                    <a href="<?= base_url; ?>/user/edit/<?= $row['id_user'] ?>" class="btn btn-info "><i class="nav-icon fas fa-edit"></i> </a> <a href="<?= base_url; ?>/user/hapus/<?= $row['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus data ?');"><i class="nav-icon fas fa-trash"></i> </a>
                  </td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->