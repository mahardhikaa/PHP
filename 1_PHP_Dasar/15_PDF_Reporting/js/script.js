$(document).ready(function(){
    $('#keyword').on('keyup', function(){
        $('#container').load('ajax/mahasiswa.php?key='+$('#keyword').val());
        $('#search_clear').show();
    });
});