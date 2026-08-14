<?php
// hapus_pelanggan.php
session_start();
include 'config/koneksi.php';

$id = $_GET['id'];

$sql = "SELECT nama_pelanggan FROM tbl_pelanggan WHERE id_pelanggan = '$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

$sql = "DELETE FROM tbl_pelanggan WHERE id_pelanggan = '$id'";

if (mysqli_query($koneksi, $sql)) {
    $user = $_SESSION['username'];
    $waktu = date('Y-m-d H:i:s');
    $aktivitas = "Hapus pelanggan : " . $data['nama_pelanggan'];

    $log = "INSERT INTO tbl_log (user, aktivitas, waktu)
            VALUES ('$user', '$aktivitas', '$waktu')";

    mysqli_query($koneksi, $log);
}

header("Location: data_pelanggan.php");
exit;
?>