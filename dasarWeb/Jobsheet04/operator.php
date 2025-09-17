<?php
$a = 10;
$b = 5;

//operator artimatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "<h3>Operator Aritmatika</h3>";
echo "Hasil Tambah = $hasilTambah <br>";
echo "Hasil Kurang = $hasilKurang <br>";
echo "Hasil Kali   = $hasilKali <br>";
echo "Hasil Bagi   = $hasilBagi <br>";
echo "Sisa Bagi    = $sisaBagi <br>";
echo "Pangkat      = $pangkat <br><br>";

// operator perbandingan
$hasilSama           = $a == $b;
$hasilTidakSama      = $a != $b;
$hasilLebihKecil     = $a < $b;
$hasilLebihBesar     = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<h3>Operator Perbandingan</h3>";
echo "Apakah a == b ? "; var_dump($hasilSama); echo "<br>";
echo "Apakah a != b ? "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a < b ? "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a > b ? "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a <= b ? "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a >= b ? "; var_dump($hasilLebihBesarSama); echo "<br><br>";

//operator logika
$hasilAnd  = $a && $b;
$hasilOr   = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<h3>Operator Logika</h3>";
echo "a && b : "; var_dump($hasilAnd); echo "<br>";
echo "a || b : "; var_dump($hasilOr); echo "<br>";
echo "!a     : "; var_dump($hasilNotA); echo "<br>";
echo "!b     : "; var_dump($hasilNotB); echo "<br><br>";

//operator penugasan
echo "<h3>Operator Penugasan</h3>";
$a += $b;
echo "Setelah a += b : $a <br>";
$a -= $b;
echo "Setelah a -= b : $a <br>";
$a *= $b;
echo "Setelah a *= b : $a <br>";
$a /= $b;
echo "Setelah a /= b : $a <br>";
$a %= $b;
echo "Setelah a %= b : $a <br><br>";

//operator identitas
$hasilIdentik      = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<h3>Operator Identitas</h3>";
echo "Apakah a === b ? "; var_dump($hasilIdentik); echo "<br>";
echo "Apakah a !== b ? "; var_dump($hasilTidakIdentik); echo "<br><br>";

//studi kasus
$rakBuku = 120;
$rakTerisi = 85;

$rakKosong = $rakBuku - $rakTerisi;
$persenKosong = ($rakKosong / $rakBuku) * 100;

echo "<h3>Persentase Rak Kosong</h3>";
echo "Total rak Buku: $rakBuku <br>";
echo "Rak terisi: $rakTerisi <br>";
echo "Rak kosong: $rakKosong <br>";
echo "Persentase Rak kosong: " . round($persenKosong, 2) . "%";

?>
