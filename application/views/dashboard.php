      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <!-- <h2>Section title</h2> -->
              <h2 class="h5 page-title">Dashboard</h2>
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-dark">
                            <i class="fe fe-16 fe-arrow-right text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <a href="Stock_masuk">
                          <h6>Barang Masuk</h6>
                          </a>
                          <span class="h3 mb-0"><?= $stokmasuk['jumlah'] ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-dark">
                            <i class="fe fe-16 fe-arrow-left text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <a href="stock_keluar">
                          <h6>Barang Keluar</h6>
                          </a>
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">
                              <span class="h3 mr-2 mb-0"><?= $stokkeluar['jumlah'] ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow btn-success text-white">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-dark-light">
                            <i class="fe fe-16 fe-box text-white ml-2"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <a href="produk">
                          <h6>Produk</h6>
                          </a>
                          <span class="h3 mb-0" ><?= $produk['jumlah'] ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-dark">
                            <i class="fe fe-16 fe-file-text text-white"></i>
                          </span>
                        </div>
                        <div class="col">
                          <a href="transaksi">
                          <h6>Laporan Transaksi</h6>
                          </a>
                          <span class="h3 mb-0"><?= $transaksi['jumlah'] ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              </div>
            </div>
          </div>
        </main>
