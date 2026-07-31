<?php
// proses login.php
session_start();
include'config/koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];

$sql = "SELEC * FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi,$sql);

if (mysqli_num_rows($hasil)== 1){
    $data = mysqli_fetch_assoc($hasil);
}

if (password_verify($passwod, $data['password'])) {
    //password cocok, buat session
    $_SESSION['login']   = true;
    $_SESSION['id_user']  =$data['id_user'];
    $_SESSION['nama_lengkap']  =$data['nam_lengkp'];
    $_SESSION['role']   =$data['role'];

//catat aktivitas ke tbl_log
$id_user =$data['id_user'];
$waktu =date('Y-m-d H: i:s');
$log = "INSERT INTO tbl_log (id_user, aktivitas,waktu)";
$log = "VALUES ('$id_user', 'login','$waktu')";
mysqli_query($koneksi, $log);

header('location: dashboard.php');
exit;
} else {
    $_SESSION['pesan_error'] = 'username tidak ditemukan!';
    header('location: login.php');
    exit;
}
?>