<?php
//riwayat_transaksi.php
include 'includes/cek_session.php';
include 'config/koneksi.php';

$sql = "SELECT t.no_transksi, t.tanggal, t.total_bayar, u.nama_lengkap AS nama_kasir
 FROM tbl_transaksi t 
 JOIN tbl_user u ON t.td_kasir = u.id_user 
 ORDER BY t.tanggal DESC";
$hasil = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html>
    <head><title>riwayat transaksi - warung ABC</title></head>
    <body>
        <h1>riwayat transaksi</h1>
        <table border= "1" cellpadding= "6">
            <tr><th>No. transaksi</th><th>tanggal</th><th>kasir</th><th>total bayar</th></tr>
            <?php while ($row = mysqli_fetch_assoc($hasil)) {
                ?>
                <td>
                <td><?php echo $row['no_transaksi']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['nama_kasir']; ?><td>
                <td><?php echo number_format($row['total_bayar'], 0, ',', '.'); ?></td>
</tr>
            <?php } ?>
</table>
<p><a href="dashboard.php">kembali ke dasboard</a></p>
</body>
</htnl>