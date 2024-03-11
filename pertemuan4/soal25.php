<?php
// Menghitung total skor pemain
$poin = 700; // Misal, ganti dengan nilai skor sesuai kebutuhan

// Menentukan apakah pemain mendapatkan hadiah tambahan atau tidak
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

// Menampilkan hasil
echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan <br>";
?>