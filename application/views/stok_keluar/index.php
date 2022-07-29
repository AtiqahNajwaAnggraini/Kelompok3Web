
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Barang Keluar</h2>
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
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Barcode</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($stokkeluar as $s) : ?>
                          <tr>
                            <td><?= $i;?></td>
                            <td><?= $s->tanggal;?></td>
                            <td><?= $s->barcode;?></td>
                            <td><?= $s->nama_produk;?></td>
                            <td><?= $s->jumlah;?></td>
                            <td><?= $s->keterangan;?></td>
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
                              <form action="<?=base_url();?>index.php/stok_keluar/tambah_aksi" method="post">
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Tanggal :</label>
                                  <input type="datetime-local" class="form-control" placeholder="Tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Barcode :</label>
                                  <select class="form-control select2" name="barcode" id="barcode">
                                    <option value="">Select Barcode</option>
                                      <?php foreach ($produk as $m) : ?>
                                        <option value="<?= $m->id; ?>"><?= $m->barcode; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Jumlah:</label>
                                  <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" required>
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Keterangan:</label>
                                 <select name="keterangan" class="form-control select2">
                                      <option value="rusak">Rusak</option>
                                      <option value="hilang">Hilang</option>
                                      <option value="kadaluarsa">Kadaluarsa</option>
                                      <option value="lain">Lainnya</option>
                                  </select>
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

