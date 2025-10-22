<?php
include "koneksi.php";

// Ambil data dari form login
$username = $_POST['username'];
$password = md5($_POST['password']); 

// Query ke tabel user
$query = "SELECT * FROM public.\"user\" WHERE username = '$username' AND password = '$password'";
$result = pg_query($connect, $query);
$row = pg_fetch_assoc($result);

if ($row) {
    if ($row['level'] == 1) {
        echo "Anda berhasil login sebagai Admin. Silakan menuju ";
        echo '<a href="homeAdmin.html">Halaman HOME Admin</a>';
    } elseif ($row['level'] == 2) {
        echo "Anda berhasil login sebagai Guest. Silakan menuju ";
        echo '<a href="homeGuest.html">Halaman HOME Guest</a>';
    } else {
        echo "Level pengguna tidak dikenali.";
    }
} else {
    echo "Anda gagal login. Silakan ";
    echo '<a href="loginForm.html">Login kembali</a>';
    echo "<br><br>";
    echo pg_last_error($connect);
}
?>
