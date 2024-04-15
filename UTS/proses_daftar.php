<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if(isset($_POST['kota']) && isset($_POST['nohp']) && isset($_POST['nama1']) && isset($_POST['nama2']) && isset($_POST['nama3']) && isset($_POST['nama4']) && isset($_FILES['file'])) {
        // Collect form data
        $kota = $_POST['kota'];
        $nohp = $_POST['nohp'];
        $kategori = $_POST['var4'];
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];
        $nama4 = $_POST['nama4'];
        
        // Process the uploaded file
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Valid extensions
        $extensions_arr = array("pdf", "doc", "docx", "txt");

        // Check extension
        if (in_array($fileType, $extensions_arr)) {
            // Upload file
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                // File uploaded successfully, perform further actions here
                echo "Pendaftaran berhasil! Berkas berhasil diunggah.";
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah berkas.";
            }
        } else {
            echo "Maaf, hanya file PDF, DOC, DOCX, atau TXT yang diizinkan untuk diunggah.";
        }

        // You can perform database insertion or other actions with the collected form data here
    } else {
        echo "Mohon lengkapi semua field!";
    }
}
?>

