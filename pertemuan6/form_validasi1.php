<!DOCTYPE html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <br>
       
        <input type="submit" value="Submit">
    </form>
    <script>
    $(document).ready(function () {
        $("#myForm").submit(function (event) { // Ketika formulir disubmit
            event.preventDefault(); // Mencegah pengiriman formulir default

            var nama = $("#nama").val(); // Mendapatkan nilai input nama
            var email = $("#email").val(); // Mendapatkan nilai input email
            var password = $("#password").val(); // mendapatkan nilai input password
            var valid = true; // Menetapkan variabel validitas awal

            if (nama == "") { // Jika input nama kosong
                $("#nama-error").text("Nama harus diisi!"); // Menampilkan pesan kesalahan
                valid = false; // Menetapkan valid = false
            } else {
                $("#nama-error").text(""); // Mengosongkan pesan kesalahan jika nama telah diisi
            }

            if (email === "") { // Jika input email kosong
                $("#email-error").text("Email harus diisi!"); // Menampilkan pesan kesalahan
                valid = false; // Menetapkan valid = false
            } else {
                $("#email-error").text(""); // Mengosongkan pesan kesalahan jika email telah diisi
            }

            if (password.length < 8) { // jika panjang password kurang dari 8
                $("#password-error").text("Password harus minimal 8 karakter!"); // output
                valid = false;
            } else {
                $("#password-error").text("");
            }

            if (!valid) { // Jika valid = false (ada kesalahan)
                return false; // Menghentikan eksekusi
            }

            // Mengirim data melalui AJAX
            $.ajax({
                type: 'POST',
                url: 'proses_validasi.php',
                data: $(this).serialize(),
                success: function(response) {
                    // Menampilkan respon dari server
                    alert(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Menampilkan pesan error jika terjadi kesalahan
                    alert('Terjadi kesalahan: ' + textStatus);
                }
            });
        });
    });
</script>

</body>

</html>