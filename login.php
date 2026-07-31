<!DOCYTPE html>
<html>
    <head>
        <title>login - warung ABC</title>
    <head>
        <body>
            <h1>login aplikasi kasir warung ABC</h1>

            <?php
            sesion_start();
            if (isset($_SESSION['pesan_error'])){
                echo '<p>' . $_SESSION['pesan_error']. '</p>';
                unset($_SESSION['pesan_error']);
            }
            ?>

            <from action= "proses_login.php" method="POST">
                <table>
                    <tr>
                        <td>password</td>
                        <td>:</td>
                        <td><input type="pssword" name="password" required</td>
</tr>
<tr>
    <td colspan="3">
        <input type="submi" value = "login">
</td>
</tr>
</table>
</from>
</body>
</html>