<!-- Default box -->
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" 
            data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
           
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col mb-3 ">
              <a href="index.php?halaman=tambahadmin" class="btn btn-primary float-right">
                <i class="fa fa-user-plus"></i> Tambah Admin</a>
            </div>
          </div>
         <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                      include "koneksi.php";
                      $no=1;
                      $sql=mysqli_query($koneksi,"SELECT*FROM admin");
                      while($data=mysqli_fetch_array($sql)){
                       echo "
                    <tr>
                    <td>$no</td>
                    <td>$data[nama_admin]</td>
                    <td>$data[username_admin]</td>
                    <td>$data[level]</td>
                    <td><div class='btn goup'>
                    <a href='index.php?halaman=editadmin&id_admin=$data[id_admin]' class='btn btn-sm btn-success' 
                    title='ubah data'><i class='fa fa-pencil-alt'>
                    </i> </a>
                    <a href='db/dbpengguna.php?proses=hapus&id_admin=$data[id_admin]' class='btn btn-sm btn-danger' 
                    title='hapus data'><i class='fa fa-trash-alt'>
                    </i> </a>
                   </div> </td>
                  </tr>";
                  $no++;
                      }
                    ?>
                   
        </tbody>
        </div>
        <!-- /.card-body -->
        <!--<div class="card-footer">
          Footer
        </div>-->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->