
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Laporan Penjualan</h2>
              <div class="row my-4">
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
                            <th>Qty</th>
                            <th>Total Bayar</th>
                            <th>Jumlah Uang</th>
                            <th>Nota</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($laporan as $s) : ?>
                          <tr>
                            <td><?= $i;?></td>
                            <td><?= $s->tanggal;?></td>
                            <td><?= $s->barcode;?></td>
                            <td><?= $s->qty;?></td>
                            <td><?= $s->total_bayar;?></td>
                            <td><?= $s->jumlah_uang;?></td>
                            <td><?= $s->nota;?></td>
                            <td><a href="./cetak/<?= $s->id;?>" class="btn mb-2 btn-success">Cetak</a>
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
    