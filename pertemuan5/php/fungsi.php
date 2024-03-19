<?php

function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Sandrina<br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//Memanggil fungsi ynag telah dibuat
perkenalan();

echo "<hr>";

//Membuat fungsi
function perkenalan1($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//Memanggil fungsi yang sudah dibuat
perkenalan1("Hamdana", "Halo!");

echo "<hr>";

$saya = "Sandrina";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan1($saya);

echo "<hr>";

//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan2($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2005, 2024) ." tahun<br/>";
    echo "Senang berkenalan anda<br/>";
}
//memanggil fungsi perkenalan2
perkenalan2("Sandrina");
?>