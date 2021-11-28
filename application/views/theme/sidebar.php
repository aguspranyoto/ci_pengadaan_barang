<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pengadaan Barang</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('barang/read');?>">
      <i class="fas fa-fw fa-book"></i>
      <span>Barang</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('kategori_barang/read');?>">
      <i class="fas fa-fw fa-book"></i>
      <span>Kategori Barang</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('barang_masuk/read');?>">
      <i class="fas fa-fw fa-building"></i>
      <span>Barang Masuk</span></a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('barang_keluar/read');?>">
      <i class="fas fa-fw fa-book"></i>
      <span>Barang Keluar</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('user/read');?>">
      <i class="fas fa-fw fa-user"></i>
      <span>User</span></a>
  </li>

  <hr class="sidebar-divider d-none d-md-block">

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
