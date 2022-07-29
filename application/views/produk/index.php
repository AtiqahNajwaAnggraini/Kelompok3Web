
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Produk</h2>
              <div class="row my-4">
                <a href=" " class="btn mb-2 btn-primary" data-toggle="modal" data-target="#modaladd">Tambah Data</a>
              <?= $this->session->flashdata('message');?>
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                            <th></th>
                            <th>#</th>
                            <th>Barcode</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($produk as $s) : ?>
                          <tr>
                            <td>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                              </div>
                            </td>
                            <td><?= $i;?></td>
                            <td><?= $s->barcode;?></td>
                            <td><?= $s->nama_produk;?></td>
                            <td><?= $s->Kategori;?></td>
                            <td><?= $s->Satuan;?></td>
                            <td><?= $s->harga;?></td>
                            <td><?= $s->stok;?></td>
                            <td>
                              <!-- <a href="./produk/edit_produk/<?= $s->id;?>" class="btn mb-2 btn-success">Edit</a> -->
                              <a href=" " class="btn mb-2 btn-success" data-toggle="modal" data-target="#editproduk<?= $s->id;?>">Edit</a>
                              <a href=" " class="btn mb-2 btn-danger" data-toggle="modal" data-target="#hapusproduk<?= $s->id;?>">Hapus</a>
                            </td>
                          </tr>
                          <?php $i++;?>
                          <?php endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        
       
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="varyModalLabel">Tambah Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="<?=base_url();?>index.php/produk/tambah_aksi" method="post">
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Barcode:</label>
                                  <input type="text" class="form-control" placeholder="Barcode" name="barcode" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Nama Barang:</label>
                                  <input type="text" class="form-control" placeholder="Nama" name="nama_produk" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Satuan:</label>
                                  <select class="form-control select2" name="satuan" id="satuan">
                                    <option value="">Select Satuan</option>
                                      <?php foreach ($satuan as $m) : ?>
                                        <option value="<?= $m->Id; ?>"><?= $m->Satuan; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Kategori:</label>
                                  <select class="form-control select2" name="kategori" id="kategori">
                                    <option value="">Select Kategori</option>
                                      <?php foreach ($kategori as $m) : ?>
                                        <option value="<?= $m->Id; ?>"><?= $m->Kategori; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Harga:</label>
                                  <input type="text" class="form-control" placeholder="Harga" name="harga" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Stok:</label>
                                  <input type="text" class="form-control" placeholder="Stok" name="stok" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn mb-2 btn-primary">Simpan</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <?php foreach ($produk as $s) : ?>
                      <div class="modal fade" id="editproduk<?= $s->id;?>" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="varyModalLabel">Edit Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="<?=base_url();?>index.php/produk/edit_aksi" method="post">
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Barcode:</label>
                                  <input type="text" class="form-control" value="<?= $s->barcode;?>" placeholder="Barcode" name="barcode" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Nama Barang:</label>
                                  <input type="text" class="form-control" value="<?= $s->nama_produk;?>" placeholder="Nama" name="nama_produk" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Satuan:</label>
                                  <select class="form-control select2" name="satuan" id="satuan">
                                    <option value="">Select Satuan</option>
                                      <?php foreach ($satuan as $m) : ?>
                                        <option value="<?= $m->Id; ?>" <?= $m->Id == $s->satuan ? "selected" : null ?>><?= $m->Satuan; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Kategori:</label>
                                  <select class="form-control select2" name="kategori" id="kategori">
                                    <option value="">Select Kategori</option>
                                      <?php foreach ($kategori as $m) : ?>
                                        <option value="<?= $m->Id; ?>" <?= $m->Id == $s->kategori ? "selected" : null ?>><?= $m->Kategori; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Harga:</label>
                                  <input type="text" class="form-control" value="<?= $s->harga;?>" placeholder="Harga" name="harga" required>
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Stok:</label>
                                  <input type="text" class="form-control" placeholder="Stok" name="stok" value="<?= $s->stok;?>" readonly>
                                  <input type="hidden" name="id" value="<?php echo $s->id;?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn mb-2 btn-primary">Simpan</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <?php endforeach;?>

    <?php foreach ($produk as $s) : ?>
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
                                <div class="modal-body">Yakin Ingin Menghapus Data Produk <b><?php echo $s->nama_produk;?></b> ? </div>
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
                        <?php endforeach;?>
