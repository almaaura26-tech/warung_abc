<?php
//hapus_barang.php
session_start();
include 'includes/cek_session.php';
include 'config/koneksi.php';

$id = mysqli_query($koneks, "SELECT nama_barang FROM tb_lbarang WHERE id_barang = '$id'");
$data = mysqli_fetch_assoc($cek);

$sql = "DALETE FROM tbl_barang WHERE id_barang = '$id'";

if (mysqli_query($koneksi)){
    $id_user = $_SESSION['id_user'];
    $waktu = date('Y-m-d H:i:s');
    $aktivi ="hapus barang: " . $data['nama_barang'];
    $log = "INSERT INTO tbl_log (id_use,aktivitas,waktu) VALUES ('$id_user','$aktivitas','$waktu')";
    mysqli_query($koneksi,$log);
}

header('location: data_barang.php');
exic;
?