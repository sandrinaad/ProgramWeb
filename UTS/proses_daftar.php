<?php 
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Polinema Bridge Cup</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function() {
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php if (empty($errors)): ?>
                    alert("Data berhasil disimpan");
                    $('#team-table').fadeIn(1000); // Tampilkan tabel setelah notifikasi ditutup
                <?php endif; ?>
            <?php endif; ?>
        });
    </script>
</head>
<body>
    <div class="container">
        <h2>Polinema Bridge Cup</h2>
        <?php
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

            // Menyimpan nilai ke dalam cookie
            setcookie("kota", $kota, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
            setcookie("nohp", $nohp, time() + (86400 * 30), "/");
            setcookie("kategori", $kategori, time() + (86400 * 30), "/");
            setcookie("nama1", $nama1, time() + (86400 * 30), "/");
            setcookie("nama2", $nama2, time() + (86400 * 30), "/");
            setcookie("nama3", $nama3, time() + (86400 * 30), "/");
            setcookie("nama4", $nama4, time() + (86400 * 30), "/");

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
                    echo "<br><br>data berhasil disimpan";
                    echo "<br>";
                    // Menampilkan data dalam bentuk tabel
                    echo "<h2>Data Tim</h2>";
                    echo "<table id='team-table' border='1'>";
                    echo "<tr><th>Kota</th><th>Kategori</th><th>Anggota</th><th>Nama Anggota</th><th>Nomor HP Manager</th></tr>";
                    // Menambahkan nomor urut atau poin sebagai pembeda antara anggota tim
                    echo "<tr><td rowspan='4'>".$_SESSION['kota']."</td><td rowspan='4'>".$_SESSION['kategori']."</td><td>Anggota 1</td><td>".$_SESSION['nama1']."</td><td rowspan='4'>".$_SESSION['nohp']."</td></tr>";
                    echo "<tr><td>Anggota 2</td><td>".$_SESSION['nama2']."</td></tr>";
                    echo "<tr><td>Anggota 3</td><td>".$_SESSION['nama3']."</td></tr>";
                    echo "<tr><td>Anggota 4</td><td>".$_SESSION['nama4']."</td></tr>";
                    echo "</table>";
                    echo "File berhasil diunggah.";
                } else {
                    echo implode("", $errors);
                }
            }
        }
        ?>
    </div>
</body>
</html>
