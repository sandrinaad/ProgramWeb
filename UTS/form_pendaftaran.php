<!DOCTYPE html>
<html>
<head>
    <title>Polinema Bridge Cup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Polinema Bridge Cup</h2>
        <form id="registrationForm" enctype="multipart/form-data" method="post" action="proses_daftar.php">
            <div class="form-group">
                <label for="kota">Kota :</label>
                <input type="text" id="kota" name="kota" >
            </div>
            <div class="form-group">
                <label for="nohp">No HP Manager :</label>
                <input type="text" id="nohp" name="nohp" >
            </div>
            <div class="form-group">
                <label for="kategori">Kategori : </label>
                <select name="kategori" id="kategori">
                    <option value="Beregu Putra">Beregu Putra</option>
                    <option value="Beregu Putri">Beregu Putri</option>
                    <option value="Beregu Campuran">Beregu Campuran</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama1">Nama Anggota 1 :</label>
                <input type="text" id="nama1" name="nama1" >
            </div>
            <div class="form-group">
                <label for="nama2">Nama Anggota 2 :</label>
                <input type="text" id="nama2" name="nama2" >
            </div>
            <div class="form-group">
                <label for="nama3">Nama Anggota 3 :</label>
                <input type="text" id="nama3" name="nama3" >
            </div>
            <div class="form-group">
                <label for="nama4">Nama Anggota 4 :</label>
                <input type="text" id="nama4" name="nama4" >
            </div>
            <div class="form-group">
                <label for="files">Berkas Anggota</label>
                <!-- Perbaikan: id harusnya files, bukan file -->
                <input type="file" name="file" id="files" multiple="multiple" accept=".pdf, .doc, .docx">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
         $(document).ready(function() {
            $('#registrationForm').submit(function(event) {
                event.preventDefault();
                var kota = $('#kota').val();
                var nohp = $('#nohp').val();
                var fileInput = $('#files');
               
                var file = fileInput.prop('files')[0];
                var fileExtension = file ? file.name.split('.').pop().toLowerCase() : '';

                var errors = [];

                if (kota.trim() === '') {
                    errors.push('Kota harus diisi.');
                }

                if (nohp.trim() === '') {
                    errors.push('No HP harus diisi.');
                }

                //Validasi apakah file sudah terpilih
                if (!file) {
                    errors.push('Anda harus memilih berkas anggota.');
                } else {
                    var allowedExtensions = ['pdf', 'doc', 'docx'];
                    if ($.inArray(fileExtension, allowedExtensions) === -1) {
                        errors.push('Ekstensi file yang diizinkan adalah hanya PDF, DOC, atau DOCX.');
                    }

                    if (file.size > 2097152) {
                        errors.push('Ukuran file tidak boleh lebih dari 2 MB');
                    }
                }
                if (errors.length > 0) {
                    alert(errors.join('\n'));
                } else {
                    this.submit();
                }
            });
        });
    </script>
</body>
</html>

