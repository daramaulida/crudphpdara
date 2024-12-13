<?php
include "koneksi.php";
$id_konten = $_GET['id_konten'];

$sql = mysqli_query($koneksi, "SELECT * FROM konten WHERE id_konten='$id_konten'");
$data = mysqli_fetch_array($sql);

?>

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Data konten</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="db/dbpengguna.php?proses=update" method="POST">
    <input type="hidden" value="<?= $data['id_konten'] ?>" name="id_konten" id_konten="id_konten">
    <div class="card-body">
      <div class="form-group">
        <label for="nama_konten">nama_konten</label>
        <input type="text" class="form-control" id="nama_konten" name="nama_konten"
          placeholder="nama" value="<?= $data['nama_konten'] ?>" required>
      </div>
      <div class="form-group">
        <label for="username_konten">username_konten</label>
        <input type="text" class="form-control" id="username_konten" name="username_konten"
          placeholder="username_konten" value="<?= $data['username_konten'] ?>" required>
      </div>
      <div class="form-group">
        <label>Select</label>
        <select class="form-control" name="level">
          <option value="konten" <?php if ($data['level'] == 'konten') 
          echo "selected"; ?>>konten</option>
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