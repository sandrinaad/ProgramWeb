<?php
echo "<h1> Daftar Mahasiswa Array Multidimensi </h1>";
$daftar = array(
    array("profile" => "img/1.jpg", "nama" => "Sandrina Athallia", "nim" => "2241760034", "alamat" => "Buring raya F4", "jurusan" => "Teknologi Informasi", "email" => "sandrinaa@gmail.com"),
    array("profile" => "img/2.jpg", "nama" => "Lee Haechan", "nim" => "2241760002", "alamat" => "Arjowinangun C6", "jurusan" => "Teknik Mesin", "email" => "haechanlee@gmail.com"),
);

foreach ($daftar as $data) {
    echo "<img src='" . $data["profile"] . "' alt='Foto' style='width: 200px; height: 230px; object-fit: cover; margin-bottom: 10px;'><br>";
    echo "Nama: " . $data["nama"] . "<br>";
    echo "NIM:" . $data["nim"] . "<br>";
    echo "Alamat: " . $data["alamat"] . "<br>";
    echo "Jurusan: " . $data["jurusan"] . "<br>";
    echo "email: " . $data["email"] . "<br><br>";
}
?>

