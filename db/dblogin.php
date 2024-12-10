<?php
session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);

include "../koneksi.php";
$sql=mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username'AND 
password ='$password'");
$jumlahpengguna=mysqli_num_rows($sql);
$data=mysqli_fetch_array($sql);

if($jumlahpengguna>0){
    $_SESSION['username']=$data['username'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['idAdmin']=$data['id'];
    $_SESSION['level']=$data['level'];

    $_SESSION['status_login']=true;
    $_SESSION['waktu']=time();
    header("location:../index.php");
}else{
  header("location:../index.php?pesan=gagal");
}