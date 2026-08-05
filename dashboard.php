<?php
//dashboard.php
include 'includes/cek_session.php';
?>
<!DOCYTPE html>
<html>
    <head>
        <title>dashboard - warung ABC</title>
    <head>
    <body>
        <h1>selamat datang, <?php echo $_SESSION['nama_lengkap']; ?></h1>
        <p>anda login sebagai: <?php echo $_SESSION['role']; ?></p>
        <a href="logout.php">logout</a>
</body>
</html>
