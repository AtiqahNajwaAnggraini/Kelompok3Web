
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Supplier</h2>
              <div class="row my-4">
                <a href="<?=base_url();?>supplier/tambah_supplier" class="btn rounded-pill btn-primary mb-3">Tambah Data</a>
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
                            <th>Nama Supplier</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($supplier as $s) : ?>
                          <tr>
                            <td><?= $i;?></td>
                            <td><?= $s->nama;?></td>
                            <td><a href="./supplier/edit_supplier/<?= $s->id;?>" class="btn mb-2 btn-success">Edit</a>
                              <a href=" " class="btn mb-2 btn-danger" data-toggle="modal" data-target="#hapussupplier<?= $s->id;?>">Hapus</a>
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
    <?php foreach ($supplier as $s) : ?>
                        <div
                          class="modal fade"
                          id="hapussupplier<?= $s->id;?>"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Hapus Data Supplier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <form action="<?=base_url();?>index.php/supplier/hapus_supplier" method="post">
                                <div class="modal-body">Yakin Ingin Menghapus Data Supplier <b><?php echo $s->nama;?></b> ? </div>
                                <input type="hidden" name="id" value="<?php echo $s->id;?>">
                                <div class="modal-footer">
                                <button
                                  type="submit"
                                  class="btn btn-danger"
                                >
                                  Hapus Supplier
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <?php endforeach;?>
