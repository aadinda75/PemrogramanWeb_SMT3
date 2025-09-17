<?php
//Menampilkan daftar siswa yang lulus dengan nilai >= 70
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo "<br><br>";

//Menampilkan daftar karyawan dengan pengalaman kerja lebih dari 5 tahun
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";


//Menampilkan daftar nilai berdasarkan mata kuliah
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";

//Soal : Menghitung rata-rata dan menampilkan nilai di atas rata-rata
$nilaiFisika = [
    'Andi' => 75,
    'Budi' => 88,
    'Citra' => 95,
    'Dinda' => 70,
    'Farhan' => 82,
];


$totalNilai = array_sum($nilaiFisika);
$jumlahSiswa = count($nilaiFisika);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas adalah: " . number_format($rataRata, 2) . "<br>";
echo "Siswa dengan nilai di atas rata-rata (" . number_format($rataRata, 2) . "): <br>";


foreach ($nilaiFisika as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}

?>