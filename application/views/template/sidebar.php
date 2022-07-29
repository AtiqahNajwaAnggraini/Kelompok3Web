      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center">              
              <img src="<?=base_url();?>assets/assets/avatars/POLKAM.png" alt="Image" style="width:60px;height:60px;">
            </a>
          </div>
          <!-- icon Dashboard -->
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('dashboard');?>">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>
              </a>
            </li>
          </ul>
          <?php $role = $this->session->userdata('level'); ?>

          <ul class="navbar-nav flex-fill w-100 mb-2">
            <?php if ($role === '1'): ?>
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-folder fe-16"></i>
                <span class="ml-3 item-text">Data Utama</span>
              </a>
              
              <ul class="collapse list-unstyled w-100" id="dashboard">

                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('kategori');?>"><span class="ml-1 item-text">Kategori Produk</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('satuan');?>"><span class="ml-1 item-text">Satuan Produk</span></a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('user');?>"><span class="ml-1 item-text">Pengguna</span></a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('supplier');?>"><span class="ml-1 item-text">Supplier</span></a>
                </li>
              </ul>
            </li>
           <?php endif ?>

            <li class="nav-item dropdown">
              <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-list fe-16"></i>
                <span class="ml-3 item-text">Data Barang</span>
              </a>
              <ul class="collapse list-unstyled w-100" id="forms">
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('produk');?>"><span class="ml-1 item-text">Produk</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('stok_masuk');?>"><span class="ml-1 item-text">Barang Masuk</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('stok_keluar');?>"><span class="ml-1 item-text">Barang Keluar</span></a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-shopping-cart fe-16"></i>
                <span class="ml-3 item-text">Data Transaksi</span>
              </a>
              <ul class="collapse list-unstyled  w-100" id="tables">
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('transaksi');?>"><span class="ml-1 item-text">Transaksi</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-5" href="<?=base_url('transaksi/laporan');?>"><span class="ml-1 item-text">Laporan</span></a>
                </li>
               
              </ul>
            </li>
            
          </ul>
         
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('auth/logout');?>">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Logout</span>
              </a>
            </li>
          </ul>
          
        </nav>
      </aside>