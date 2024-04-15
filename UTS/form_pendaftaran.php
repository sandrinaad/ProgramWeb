<!DOCTYPE html>
<html>
<head>
    <title>Polinema Bridge Cup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Polinema Bridge Cup</h2>
        <form id="registrationForm" method="post" action="proses_daftar.php">
    <div class="form-group">
      <label for="kota">Kota :</label>
      <input type="text" id="kota" name="kota" required>
    </div>
    <div class="form-group">
      <label for="nohp">No HP Manager :</label>
      <input type="text" id="nohp" name="nohp" required>
    </div>
    <div class="form-group">
      <label for="email">Kategori : </label>
      <input type="radio" name="var4" value="r1">Beregu Putra<br>
      <input type="radio" name="var4" value="r1">Beregu Putri <br>
      <input type="radio" name="var4" value="r1">Beregu Campuran<br><br>
    </div>
    <div class="form-group">
      <label for="nama1">Nama Anggota 1 :</label>
      <input type="text" id="nama1" name="nama1" required>
    </div>
    <div class="form-group">
      <label for="nama2">Nama Anggota 2 :</label>
      <input type="text" id="nama2" name="nama2" required>
    </div>
    <div class="form-group">
      <label for="nama3">Nama Anggota 3 :</label>
      <input type="text" id="nama3" name="nama3" required>
    </div>
    <div class="form-group">
      <label for="nama4">Nama Anggota 4 :</label>
      <input type="text" id="nama4" name="nama4" required>
    </div>
    <div class="form-group">
        <label for="berkas">Berkas Anggota :</label>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <button type="submit">Kirim</button>
        </form>
        <div id="status"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="upload.js"></script>
    </div>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>
