<?php
// Daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai dari terendah ke tertinggi
sort($nilaiSiswa);

// Menghitung total nilai
$totalNilai = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

// Menghitung rata-rata nilai
$rataRata = $totalNilai / (count($nilaiSiswa) - 4);

// Menampilkan hasil
echo "Total nilai yang digunakan: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata <br>";
echo "<br><br>";
?>