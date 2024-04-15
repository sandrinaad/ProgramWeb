<?php
session_start();

// Mengecek apakah ada request method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $kota = $_POST['kota'];
    $nohp = $_POST['nohp'];
    $kategori = $_POST['kategori'];
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];

    // Menyimpan nilai ke dalam session
    $_SESSION['kota'] = $kota;
    $_SESSION['nohp'] = $nohp;
    $_SESSION['kategori'] = $kategori;
    $_SESSION['nama1'] = $nama1;
    $_SESSION['nama2'] = $nama2;
    $_SESSION['nama3'] = $nama3;
    $_SESSION['nama4'] = $nama4;

    // Mengecek apakah ada berkas yang diunggah
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size']; 
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

        // Menambahkan timestamp ke nama file
        $file_name = time() . '.' . $file_ext;

        // Menyimpan nama file ke dalam session
        $_SESSION['file_name'] = $file_name;

        $extensions = array("pdf");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah hanya PDF.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            // Memindahkan berkas yang diunggah ke direktori tujuan
            move_uploaded_file($file_tmp, 'uploads/' . $file_name); 
            echo "data berhasil disimpan";
            echo "<br>";
            echo "Kota  : ".$_SESSION['kota'];
            echo "<br>";
            echo "No HP Manajer :".$_SESSION['nohp'];
            echo "<br>";

            echo "Kategori :".$_SESSION['kategori'];
            echo "<br>";

            echo "Nama Anggota 1:".$_SESSION['nama1'];
            echo "<br>";

            echo "Nama Anggota 2:".$_SESSION['nama2'];
 
            echo "<br>";
 
            echo "Nama Anggota 3:".$_SESSION['nama3'];

            echo "<br>";
            echo "Nama Anggota 4:".$_SESSION['nama4'];
            echo "<br>";

            echo "File berhasil diunggah.";
        } else {
            echo implode("", $errors);
        }
    }
}

// Menyimpan nilai ke dalam cookie
setcookie("kota", $kota, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
setcookie("nohp", $nohp, time() + (86400 * 30), "/");
setcookie("kategori", $kategori, time() + (86400 * 30), "/");
setcookie("nama1", $nama1, time() + (86400 * 30), "/");
setcookie("nama2", $nama2, time() + (86400 * 30), "/");
setcookie("nama3", $nama3, time() + (86400 * 30), "/");
setcookie("nama4", $nama4, time() + (86400 * 30), "/");
?>
