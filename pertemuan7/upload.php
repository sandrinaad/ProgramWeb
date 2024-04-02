<?php
if (isset($_POST['submit'])) {
    // Menentukan direktori tujuan untuk menyimpan file yang diunggah
    $targetDirectory = "documents/";
    // Menentukan nama file target dengan menggunakan nama file yang diunggah
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Mendefinisikan jenis file yang diizinkan untuk diunggah
    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    // Mendefinisikan ukuran maksimum file yang diizinkan untuk diunggah (dalam bytes)
    $maxFileSize = 5*1024*1024; // 5 MB

    // Memeriksa apakah jenis file dan ukuran file yang diunggah sesuai dengan yang diizinkan
    if (isset($_FILES["documentToUpload"]) && $_FILES["documentToUpload"]["error"] == UPLOAD_ERR_OK) {
        if (in_array($fileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
            // Jika sesuai, maka coba untuk memindahkan file ke direktori tujuan
            if(move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
                echo "Dokumen berhasil diunggah.";
            } else {
                // Jika gagal memindahkan file, tampilkan pesan kesalahan
                echo "Gagal mengunggah dokumen.";
            }
        } else {
            // Jika jenis file tidak sesuai atau ukuran melebihi batas maksimum, tampilkan pesan kesalahan
            echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan (5 MB).";
        }
    } else {
        // Jika ada kesalahan dalam unggahan file, tampilkan pesan kesalahan
        echo "Terjadi kesalahan dalam unggahan dokumen.";
    }
}
?>
