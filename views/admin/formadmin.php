<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="db/dbpengguna.php?proses=insert" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_admin">nama</label>
                    <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="nama Anda" required>
                  </div>
                  <div class="form-group">
                    <label for="username_admin">username</label>
                    <input type="text" class="form-control" id="username_admin" name="username_admin" placeholder="username Anda" required>
                  </div>
                  <div class="form-group">
                    <label for="password_admin">Password</label>
                    <input type="password_admin" class="form-control" id="password_admin" name="password_admin" placeholder="Password_admin" required>
                  </div>
                  <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="level">
                          <option value="admin">admin</option>
                          <option value="user">User</option>
                        </select>
                      </div>
                     <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      </div>-->
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i>  Simpan</button>
                <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>Reset</button>
                 
                </div>
              </form>
            </div>