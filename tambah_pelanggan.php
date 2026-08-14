<!--tambah_pelanggan.php-->
<?php include 'includes/cek_session.php';?>
<!DOCYTPE html>
<html>
    <head><title>tambah pelanggan - warung ABC </title></head>
    <body>
        <h1>tambah pelanggan</h1>
        <form action="proses_tambah_pelanggan.php" method="POST">
            <table>
                <tr><td>nama pelanggan</td><td>:</td>
                <td><input type="text" name="nama_pelanggan" required></td></tr>
                <tr><td>no. hp</td><td>:</td>
                <td><input type="text"name="no_hp"></td></tr>
                <tr><td>almat</td><td>:</td>
                <td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="3"><input type="submit" values="simpan"></td></tr>
</table>
</form>
<p><a href="data_pelanggan.php">kembali</a></p>
</body>
</html> 