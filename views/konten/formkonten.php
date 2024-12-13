<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah konten</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="db/dbpengguna.php?proses=insert" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_konten">nama</label>
                    <input type="text" class="form-control" id="nama_konten" name="nama_konten" placeholder="nama Anda" required>
                  </div>
                  <div class="form-group">
                    <label for="username_konten">username</label>
                    <input type="text" class="form-control" id="username_konten" name="username_konten" placeholder="username Anda" required>
                  </div>
                  <div class="form-group">
                    <label for="password_konten">Password</label>
                    <input type="password_konten" class="form-control" id="password_konten" name="password_konten" placeholder="Password_konten" required>
                  </div>
                  <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="level">
                          <option value="konten">konten</option>
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