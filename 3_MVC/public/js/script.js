$(function(){
    $('.tambahData').on('click', function(){
        $('#modalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.ubahData').on('click', function(){
        $('#modalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
    });

    
});