var keyword = document.getElementById('keyword');
var button = document.getElementById('submit_search');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState==4 && xhr.status==200){
            container.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', 'ajax/mahasiswa.php?key='+keyword.value, true);
    xhr.send();
});