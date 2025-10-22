<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM public.\"user\" WHERE username = '$username' AND password = '$password'";
$result = pg_query($connect, $query);
$cek = pg_num_rows($result);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    echo "Anda Berhasil Login, silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    echo "Gagal login, silahkan login lagi<br>";
    echo "<a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>
