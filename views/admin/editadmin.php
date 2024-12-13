<?php
include "koneksi.php";
$id_admin = $_GET['id_admin'];

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin='$id_admin'");
$data = mysqli_fetch_array($sql);

?>

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data admin</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/dbpengguna.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['id_admin'] ?>" name="id_admin" id_admin="id_admin">
    <div class="card-body">
      <div class="form-group">
        <label for="nama_admin">nama_admin</label>
        <input type="text" class="form-control" id="nama_admin" name="nama_admin"
          placeholder="nama" value="<?= $data['nama_admin'] ?>" required>
      </div>
      <div class="form-group">
        <label for="username_admin">username_admin</label>
        <input type="text" class="form-control" id="username_admin" name="username_admin"
          placeholder="username_admin" value="<?= $data['username_admin'] ?>" required>
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" name="level">
          <option value="admin" <?php if ($data['level'] == 'admin') 
          echo "selected"; ?>>admin</option>
          <option value="user" <?php if ($data['level'] == 'user') 
          echo "selected"; ?>>User</option>
        </select>
      </div>
      
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i> Simpan</button>
      <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>Reset</button>

    </div>
  </form>
</div>