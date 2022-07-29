
<!-- gabut -->
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">Data Produk</h2>
                </div>
                <div class="col-auto">
                  <form class="form-inline">
                    <div class="form-group d-none d-lg-inline">
                      <label for="reportrange" class="sr-only">Date Ranges</label>
                      <div id="reportrange" class="px-2 py-2 text-muted">
                        <span class="small"></span>
                      </div>
                    </div>
                    </form>
                </div>
              </div>
              
                <div class="col-md-12 col-lg-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title">Produk</strong>
                     
                    </div>
                  </div>
                </div>
                <!-- Striped rows -->
                <div class="col-md-12 col-lg-12">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title">Recent Produk</strong>
                      <a class="float-right small text-muted" href="<?php echo site_url('produk/tambah_aksi') ?>"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                    <div class="card-body my-n2">
                      <table class="table table-striped table-hover table-borderless">
                        <thead>
                          <tr>
                            <h3>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Action</th>
                          </h3>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                          </tr>
                        </thead>
                        <tbody>
                  <?php foreach ($produk as $s): ?>
                  <tr>
                    <td>
                     1
                    </td>
                    <td>
                     2
                    </td>
                     <td>
                      3
                    </td>
                     <td>
                      4
                    </td>
                    <td>
                      <a href="<?php echo site_url('produk/edit_aksi/'.$s->id) ?>" class="btn btn-primary" ><i class="fas fa-edit"></i>Edit</a>
                       <a href=" " class="btn  btn-danger" data-toggle="modal" data-target="#hapusproduk<?= $s->id;?>">Hapus</a>
                    
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <!-- foreach untuk hapus data di database -->
                  <?php foreach ($produk as $s): ?>
                  <div
                          class="modal fade"
                          id="hapusproduk<?= $s->id;?>"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Hapus Data Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <form action="<?=base_url();?>index.php/produk/hapus_data_produk" method="post">
                                <div class="modal-body">Yakin Ingin Menghapus Data Produk <b><?php echo $product->nama_produk;?></b> ? </div>
                                <input type="hidden" name="id" value="<?php echo $s->id;?>">
                                <div class="modal-footer">
                                <button
                                  type="submit"
                                  class="btn btn-danger"
                                >
                                  Hapus Produk
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                  <?php endforeach; ?>

                </tbody>

                      </table>
                    </div>
                  </div>
                </div> <!-- Striped rows -->
              </div> <!-- .row-->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        
      </main> <!-- main -->