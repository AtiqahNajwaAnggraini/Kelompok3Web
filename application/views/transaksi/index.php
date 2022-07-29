<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center mb-4">
                <div class="col">
                  <h2 class="m-0 text-dark">Data Transaksi</h2>
                </div>
              </div> <!-- .row -->
              <div class="row my-4">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <div class="col-sm-12 d-flex justify-content-end text-right nota">
                        <b class="mr-2">Nota</b> <span id="nota"></span>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label>Barcode</label>
                          <span id="total" style="font-size: 80px; line-height: 1" class="float-right text-danger">0</span>
                            <div class="form-inline">
                                <select class="form-control select2 col-sm-4" name="barcode" id="barcode" onchange="getNama()">
                                    <option value="">Select Barcode</option>
                                      <?php foreach ($produk as $m) : ?>
                                        <option value="<?= $m->id; ?>"><?= $m->barcode; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                <span class="ml-3 text-muted" id="nama_produk"></span>
                            </div>
                                <small class="form-text text-muted" id="sisa"></small>
                        </div>
                        <div class="form-group">
                          <label>Jumlah</label>
                          <input type="number" class="form-control col-sm-4" placeholder="Jumlah" id="jumlah" onkeyup="checkEmpty()">
                        </div>
                        <div class="form-group">
                          <button id="tambah" class="btn btn-success" onclick="checkStok()" disabled>Tambah</button>
                          <button id="bayar" class="btn btn-success" data-toggle="modal" data-target="#modal" disabled>Bayar</button>
                        </div>
                    <div class="card-body">
                <table class="table w-100 table-bordered table-hover" id="transaksi">
                        <thead>
                          <tr>
                            <th>Barcode</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                      </table>
              </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                   <!-- .card -->
                </div> <!-- .col-md -->
                 <!-- .col-md -->
              </div> 
            </div>
          </div>
        </div>
      </main>

      <div class="modal fade" id="modal">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Bayar</h5>
    <button class="close" data-dismiss="modal">
      <span>&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form id="form">
      <div class="form-group">
        <label>Tanggal</label>
        <input type="text" class="form-control" name="tanggal" id="tanggal" required>
      </div>
      <div class="form-group">
        <label>Jumlah Uang</label>
        <input placeholder="Jumlah Uang" type="number" class="form-control" name="jumlah_uang" onkeyup="kembalian()" required>
      </div>
      <div class="form-group">
        <b>Total Bayar:</b> <span class="total_bayar"></span>
      </div>
      <div class="form-group">
        <b>Kembalian:</b> <span class="kembalian"></span>
      </div>
      <button id="add" class="btn btn-success" type="submit" onclick="bayar()" disabled>Bayar</button>
      <button id="cetak" class="btn btn-success" type="submit" onclick="bayarCetak()" disabled>Bayar Dan Cetak</button>
      <button class="btn btn-danger" data-dismiss="modal">Close</button>
    </form>
  </div>
</div>
</div>
</div>

<script>
  var produkGetNamaUrl = '<?php echo site_url('transaksi/get_nama') ?>';
  var produkGetStokUrl = '<?php echo site_url('transaksi/get_stok') ?>';
  var addUrl = '<?php echo site_url('transaksi/add') ?>';
  var getBarcodeUrl = '<?php echo base_url('transaksi/get_barcode') ?>';
  var pelangganSearchUrl = '<?php echo site_url('pelanggan/search') ?>';
  var cetakUrl = '<?php echo site_url('transaksi/cetak/') ?>';
</script>