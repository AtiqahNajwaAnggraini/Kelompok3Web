<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Tambah Data Kategori</h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Tambah Data</strong>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url();?>kategori/tambah_aksi" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="exampleInputEmail1">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div class="invalid-feedback"> Masukkan Kategori </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                      </form>
                    </div> <!-- /.card-body -->
                  </div> <!-- /.card -->
                </div> <!-- /.col -->
                 <!-- /.col -->
              </div> <!-- end section -->
            </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        
        
      </main>