
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Satuan</h2>
              <div class="row my-4">
                <a href="<?=base_url();?>satuan/tambah_data_satuan" class="btn rounded-pill btn-primary mb-3">Tambah Data</a>
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
                            <th>Satuan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($satuan as $s) : ?>
                          <tr>
                            <td>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                              </div>
                            </td>
                            <td><?= $i;?></td>
                            <td><?= $s->Satuan;?></td>
                            <td><a href="./satuan/edit_satuan/<?= $s->Id;?>" class="btn mb-2 btn-success">Edit</a>
                              <a href=" " class="btn mb-2 btn-danger" data-toggle="modal" data-target="#hapussatuan<?= $s->Id;?>">Hapus</a>
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
    <?php foreach ($satuan as $s) : ?>
                        <div
                          class="modal fade"
                          id="hapussatuan<?= $s->Id;?>"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Hapus Data Satuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <form action="<?=base_url();?>index.php/satuan/hapus_data_satuan" method="post">
                                <div class="modal-body">Yakin Ingin Menghapus Data Satuan <b><?php echo $s->Satuan;?></b> ? </div>
                                <input type="hidden" name="id" value="<?php echo $s->Id;?>">
                                <div class="modal-footer">
                                <button
                                  type="submit"
                                  class="btn btn-danger"
                                >
                                  Hapus Satuan
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <?php endforeach;?>
