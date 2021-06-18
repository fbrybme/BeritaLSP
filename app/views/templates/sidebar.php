  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-light elevation-4" style="background: #1E4657;">
    <!-- Brand Logo -->
    <a href="<?= base_url; ?>/home" class="brand-link">
      <span class="brand-text font-weight-light" style="margin-left: 60px; color: #62AAA8;"><i class="nav-icon fas fa-school"></i> BeritaLSP</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block" style="margin-left: 5px; color: #62AAA8;">Muhammad Febri Hermansyah</a>
          <a href="#" class="d-block" style="margin-left: 85px; color: #62AAA8;">XII RPL</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url; ?>/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color: #62AAA8;"></i>
              <p style="color: #62AAA8;">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header" style="color: #62AAA8;">Data</li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/kategori" class="nav-link">
              <i class="nav-icon fas fa-sun" style="color: #62AAA8;"></i>
              <p style="color: #62AAA8;">
                Daftar Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/berita" class="nav-link">
              <i class="nav-icon fas fa-book" style="color: #62AAA8;"></i>
              <p style="color: #62AAA8;">
                Daftar Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/user" class="nav-link">
              <i class="nav-icon fas fa-user" style="color: #62AAA8;"></i>
              <p style="color: #62AAA8;">
                Daftar User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/tampilan" class="nav-link">
              <i class="nav-icon fas fa-users" style="color: #62AAA8;"></i>
              <p style="color: #62AAA8;">
                Tampilan Berita
              </p>
            </a>
          </li>
          <li class="nav-header" style="color: #62AAA8;">Extra</li>
          <li class="nav-item">
            <a href="<?= base_url; ?>/about" class="nav-link">
              <i class="nav-icon fas fa-sd-card" style="color: #62AAA8;"></i>
              <p style="color: #62AAA8;">
                About Me
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>