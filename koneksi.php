<?php
$server="localhost";
$user_db="root";
$pass_db="";
$db_nama="cruddara";

$koneksi=mysqli_connect($server,$user_db,$pass_db,$db_nama);

if(mysqli_connect_error()){
    echo"Koneksi Gagal:".mysqli_connect_error();
}