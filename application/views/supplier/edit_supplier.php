<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Edit Data Supplier</h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Edit Data</strong>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url();?>supplier/edit_aksi" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="exampleInputEmail1">Supplier</label>
                            <input type="text" name="supplier" class="form-control" id="exampleInputEmail1" value="<?=$edit_supplier->nama;?>" aria-describedby="emailHelp" required>
                            <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="<?=$edit_supplier->id;?>"  aria-describedby="emailHelp" required>
                            <div class="invalid-feedback"> Masukkan Supplier </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Edit form</button>
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