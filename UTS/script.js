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