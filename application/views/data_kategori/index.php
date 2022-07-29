
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Kategori</h2>
              <div class="row my-4">
                <a href="<?=base_url();?>kategori/tambah_data_kategori" class="btn rounded-pill btn-primary mb-3">Tambah Data</a>
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
                            <th>Kategori</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($kategori as $k) : ?>
                          <tr>
                            <td>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                              </div>
                            </td>
                            <td><?= $i;?></td>
                            <td><?= $k->Kategori;?></td>
                            <td><a href="./kategori/edit_kategori/<?= $k->Id;?>" class="btn mb-2 btn-success">Edit</a>
                              <a href=" " class="btn mb-2 btn-danger" data-toggle="modal" data-target="#hapuskategori<?= $k->Id;?>">Hapus</a>
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
    <?php foreach ($kategori as $k) : ?>
                        <div
                          class="modal fade"
                          id="hapuskategori<?= $k->Id;?>"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Hapus Data Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <form action="<?=base_url();?>index.php/kategori/hapus_data_kategori" method="post">
                                <div class="modal-body">Yakin Ingin Menghapus Data Kategori <b><?php echo $k->Kategori;?></b> ? </div>
                                <input type="hidden" name="id" value="<?php echo $k->Id;?>">
                                <div class="modal-footer">
                                <button
                                  type="submit"
                                  class="btn btn-danger"
                                >
                                  Hapus Kategori
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <?php endforeach;?>
