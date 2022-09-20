$(function(){
    $('.tambahData').on('click', function(){
        $('#modalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.ubahData').on('click', function(){
        $('#modalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        $('.modal-dialog form').attr('action', 'http://localhost/PHP/3_MVC/public/mahasiswa/ubah');
        
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/PHP/3_MVC/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#Nama').val(data.Nama);
                $('#NIM').val(data.NIM);
                $('#Jurusan').val(data.Jurusan);
                $('#id').val(data.id);
                $('#Gambar').val(data.Gambar);
            }
        });
    });
});