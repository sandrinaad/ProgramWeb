<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $errors = array();

    // validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // validasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }else {
        // lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }

    if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password)) {
        echo "Password harus minimal 8 karakter dan mengandung huruf besar, huruf kecil, angka, dan karakter khusus.";
    } else {
        // Proses data yang valid
        echo "Data berhasil dikirim.";
    }
}
?>