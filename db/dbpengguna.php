<?php
$proses = $_GET['proses'];
include "../koneksi.php";


if ($proses == 'insert') {
    $nama_admin= $_POST['nama_admin'];
    $username_admin= $_POST['username_admin'];
    $password_admin= md5($_POST['password_admin']);
    $level= $_POST['level'];

    mysqli_query($koneksi, "INSERT INTO admin SET nama_admin='$nama_admin', username_admin='$username_admin', password_admin='$password_admin', level='$level'");

} else if ($proses == 'update') {
    $nama_admin = $_POST['nama_admin'];
    $username_admin = $_POST['username_admin'];
    $level = $_POST['level'];
    $id_admin = $_POST['id_admin'];

    mysqli_query($koneksi, "UPDATE admin SET nama_admin='$nama_admin', username_admin='$username_admin', level='$level' WHERE id_admin = '$id_admin'");

} else if ($proses == 'hapus') {
    $id_admin = $_GET['id_admin'];

    mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$id_admin'");
}

header("location:../index.php?halaman=admin");
