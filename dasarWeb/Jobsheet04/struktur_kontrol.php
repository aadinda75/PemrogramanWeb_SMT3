<?php
//IF ELSE
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

//WHILE
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

//FOR
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";


echo "<br><br>"; 

//FOREACH
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

//FOREACH CONTINUE
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

//Soal 1
//Daftar nilai siswa
$nilaiSiswa = [80, 95, 67, 72, 88, 91, 76, 84, 69, 93, 78, 85];

//Urutkan nilai
sort($nilaiSiswa);

//Hapus 2 nilai terendah dan tertinggi
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

//Hitung total setelah mengabaikan
$totalNilai = array_sum($nilaiSiswa);
echo "Total nilai (setelah abaikan 2 tertinggi & 2 terendah): $totalNilai <br><br>";

//Soal 2
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.15 * $hargaProduk; 
}

$hargaSetelahDiskon = $hargaProduk - $diskon;
echo "Harga yang harus dibayar: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br><br>";


//Soal 3
//Skor pemain
$poin = 550;
echo "Total skor pemain adalah: $poin <br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan bonus latihan? YA <br>";
} else {
    echo "Apakah pemain mendapatkan bonus latihan? TIDAK <br>";
}
?>
