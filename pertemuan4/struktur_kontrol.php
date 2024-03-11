<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90){
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik <70){
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni <  $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br> Jarak saat ini = $jarakSaatIni <br>";
echo "Target Jarak = $jarakTarget <br>";
echo "Peningkatan Harian = $peningkatanHarian <br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamPerLahan * $buahPerTanaman);
}

echo "<br><br> Jumlah Lahan = $jumlahLahan <br>";
echo "Jumlah Tanaman Per Lahan = $tanamPerLahan <br>";
echo "Jumlah Buah Per Tanaman = $jumlahBuah <br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
$jumlahSiswa = count($skorUjian);
$rataRata = $totalSkor / $jumlahSiswa;

echo "<br><br> Skor ujian: " . implode(", ", $skorUjian) . "<br>";
echo "Jumlah Siswa yang mengikuti Ujian: $jumlahSiswa <br>";
echo "Rata-rata skor Ujian: $rataRata <br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];


foreach($nilaiSiswa as $nilai){
    if($nilai<60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
    }else{
        echo "Nilai: $nilai (Lulus) <br>";
    }
}
?>