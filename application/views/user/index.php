
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="mb-2 page-title">Data Pengguna</h2>
              <div class="row my-4">
                <a href="<?=base_url();?>user/tambah_user" class="btn rounded-pill btn-primary mb-3">Tambah Data</a>
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
                            <th>Username</th>
                            <th>Level</th>
                            <th>Created</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          <?php foreach ($pengguna as $za) : ?>
                          <tr>
                            <td>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                              </div>
                            </td>
                            <td><?= $i;?></td>
                            <td><?= $za->username;?></td>
                            <td><?= $za->level;?></td>
                            <td><?= $za->created;?></td>
                            <td>
                              <a href="./user/edit_user/<?= $za->id_pengguna;?>" class="btn mb-2 btn-success">Edit</a>
                              <a href=" " class="btn mb-2 btn-danger" data-toggle="modal" data-target="#hapususer<?= $za->id_pengguna;?>">Hapus</a>
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

    <?php foreach ($pengguna as $m) : ?>
                      <div class="modal fade" id="hapususer<?= $m->id_pengguna;?>" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalToggleLabel">Hapus Data User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <form action="<?=base_url();?>user/hapususer" method="post">
                                <div class="modal-body">Yakin Ingin Menghapus Data User <b><?php echo $m->username;?></b> ? </div>
                                <input type="hidden" name="id" value="<?php echo $m->id_pengguna;?>">
                                <div class="modal-footer">
                                <button
                                  type="submit"
                                  class="btn btn-danger"
                                >
                                  Hapus User
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <?php endforeach;?>

