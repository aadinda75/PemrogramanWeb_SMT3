<?php
// Koneksi ke PostgreSQL
include "koneksi.php";

// Ambil data dari form login
$username = $_POST['username'];
$password = md5($_POST['password']); 

// Query untuk cek user
$query = "SELECT * FROM public.\"user\" WHERE username = '$username' AND password = '$password'";
$result = pg_query($connect, $query);
$cek = pg_num_rows($result);

if ($cek) {
    echo "Anda berhasil login. Silahkan menuju ";
    echo '<a href="homeAdmin.html">Halaman HOME</a>';
} else {
    echo "Anda gagal login. Silahkan ";
    echo '<a href="loginForm.html">Login kembali</a>';
    echo "<br><br>";
    echo pg_last_error($connect);
}
?>