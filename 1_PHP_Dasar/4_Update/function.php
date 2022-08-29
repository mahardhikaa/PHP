<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;

    $db = mysqli_query($conn, $query);
    $rows = [];
    while($result = mysqli_fetch_assoc($db)){
        $rows[] = $result;
    }
    return $rows;
}

function add_data($add){
    global $conn;

    $nama = $add["Nama"];
    $NIM = $add["NIM"];
    $jurusan = $add["Jurusan"];
    $gambar = $add["Gambar"];

    $query_add = "INSERT INTO mahasiswa
                  VALUES ('', '$nama', '$NIM', '$jurusan', '$gambar')";

    $db = mysqli_query($conn, $query_add);
    return mysqli_affected_rows($conn);
}

function delete_data($delete){
    global $conn;

    $id = $delete["id"];

    $query_delete = "DELETE FROM mahasiswa WHERE id='$id'";

    $db = mysqli_query($conn, $query_delete);
    return mysqli_affected_rows($conn);
}
?>