<?php
// Konfigurasi koneksi ke PostgreSQL
$host = "localhost";
$port = "5433";
$dbname = "prakwebdb";
$user = "postgres";
$password = "admin123";

// Membuat koneksi
$connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Mengecek koneksi
if (!$connect) {
    echo "Koneksi ke database gagal.";
} else {
    echo "Koneksi ke database berhasil!";
}
?>