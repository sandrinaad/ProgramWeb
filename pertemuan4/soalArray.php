<?php
$data_siswa = array(
    array("nama" => "Alice", "nilai" => 85),
    array("nama" => "Bob", "nilai" => 92),
    array("nama" => "Charlie", "nilai" => 78),
    array("nama" => "David", "nilai" => 64),
    array("nama" => "Eva", "nilai" => 90)
);

// Menghitung rata-rata nilai kelas
$total_nilai = 0;
foreach ($data_siswa as $siswa) {
    $total_nilai += $siswa['nilai'];
}
$rata_rata_kelas = $total_nilai / count($data_siswa);

// Mencetak daftar siswa yang nilai di atas rata-rata kelas
echo "Rata-rata kelas adalah: $rata_rata_kelas <br>";
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas:<br>";

foreach ($data_siswa as $siswa) {
    if ($siswa['nilai'] > $rata_rata_kelas) {
        echo $siswa['nama'] . ": " . $siswa['nilai'] . "<br>";
    }
}
?>