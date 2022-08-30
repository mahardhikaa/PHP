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

    $nama = htmlspecialchars($add["Nama"]);
    $NIM = htmlspecialchars($add["NIM"]);
    $jurusan = htmlspecialchars($add["Jurusan"]);
    $gambar = htmlspecialchars($add["Gambar"]);

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

function update_data($update){
    global $conn;

    $id = $update['id'];

    $nama = htmlspecialchars($update["Nama"]);
    $NIM = htmlspecialchars($update["NIM"]);
    $jurusan = htmlspecialchars($update["Jurusan"]);
    $gambar = htmlspecialchars($update["Gambar"]);

    $query_update = "UPDATE mahasiswa SET 
                    nama = '$nama',
                    NIM = '$NIM',
                    Jurusan = '$jurusan',
                    Gambar = '$gambar'
                    WHERE id=$id";

    $db = mysqli_query($conn, $query_update);

    return mysqli_affected_rows($conn);
}
?>