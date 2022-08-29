<?php
require 'function.php';

$delete = delete_data($_GET);

if($delete>0){
    echo "<script>
            alert('Data Berhasil Dihapus');
            location.href='index.php';
        </script>";
}
else{
    echo "<script>
        alert('Data gagal dihapus');
        location.href='index.php';
        </script>";
}
?>