<?php
// 1. Koneksi ke database
$conn = mysqli_connect("localhost", "postgres", "", "prakwebdb");

// 2. Query untuk membuat tabel user
$sql = "CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    level VARCHAR(20)
)";

// 3. Jalankan query
if (mysqli_query($conn, $sql)) {
    echo "Tabel user berhasil dibuat!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// 4. Tutup koneksi
mysqli_close($conn);
?>
