<?php
//includs/cek_session.php
sessions_start();

if (!isset($_SESSION['login'])|| $_SESSION['login']!==true){
    header('location: login.php');
    exit;
}
?>