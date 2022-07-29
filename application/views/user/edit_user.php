<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Edit Data Pengguna</h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Edit Data</strong>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url();?>user/edit_aksi" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="username" name="username" class="form-control" id="exampleInputEmail1" value="<?=$edituser->username;?>" aria-describedby="emailHelp" required>
                            <div class="invalid-feedback"> Masukkan Username </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" value="<?=$edituser->password;?>"  aria-describedby="emailHelp" required>
                            <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="<?=$edituser->id_pengguna;?>"  aria-describedby="emailHelp" required>
                            <div class="invalid-feedback"> Masukkan Password </div>
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