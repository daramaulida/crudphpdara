<?php
$proses = $_GET['proses'];
include "../koneksi.php";


if ($proses == 'insert') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    mysqli_query($koneksi, "INSERT INTO konten SET nama='$nama',
    username='$username',password='$password',level='$level'");
} else if ($proses == 'update') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $id = $_POST['id'];

    mysqli_query($koneksi, "UPDATE konten SET nama='$nama',
    username='$username',level='$level' WHERE id='$id'");
} else if ($proses == 'hapus') {
    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM konten WHERE id='$id'");
}

header("location:../index.php?halaman=konten");
