<?php

function cek_login(){
    if(empty($_SESSION['username'])){
        return false;
    }else{
        return true;
    }
}

function cek_timeout(){
    $waktu_idle=time()-$_SESSION['waktu'];
    if($waktu_idle>10){
        session_start();
    }

}