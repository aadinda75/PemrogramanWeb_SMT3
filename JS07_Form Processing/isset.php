<?php
$nama = "Adinda";
if (isset($nama)) {
    echo "Variabel 'nama' telah didefinisikan.";
} else {
    echo "Variabel 'nama' tidak ditemukan atau bernilai null.";
}
echo "<br>";

$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

echo "<br>";

$data = array("nama" => "Adinda", "usia" => 19);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}

?>
