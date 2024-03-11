<?php
$hargaProduk = 120000;
$diskon = 0.2; // 20%

// Minimum pembelian untuk mendapatkan diskon
$minimumPembelian = 100000;
// Menghitung harga sebelum diskon
$hargaSebelumDiskon = $hargaProduk;
// Mengecek apakah harga produk memenuhi syarat diskon
if ($hargaProduk >= $minimumPembelian) {
    // Menghitung nilai diskon
    $nilaiDiskon = $hargaProduk * $diskon;
    // Menghitung harga setelah diskon
    $hargaSetelahDiskon = $hargaProduk - $nilaiDiskon;
} else {
    // Harga setelah diskon sama dengan harga sebelum diskon
    $hargaSetelahDiskon = $hargaSebelumDiskon;
}
// Menampilkan hasil
echo "Harga produk: Rp" . number_format($hargaProduk) . "<br>";
echo "Harga sebelum diskon: Rp" . number_format($hargaSebelumDiskon) . "<br>";
echo "Diskon: " . $diskon * 100 . "% (Rp" . number_format($nilaiDiskon) . ")<br>";
echo "Harga setelah diskon: Rp" . number_format($hargaSetelahDiskon) . "<br>";
echo "<br><br>";
?>
