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
    $gambar = upload();

    //Jika tidak ada gambar yang diupload
    if(!$gambar){
        return false;
    }

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

function search($searching){
    $keyword = $searching["search"];

    $query_search = "SELECT * FROM mahasiswa
                    WHERE nama LIKE '%$keyword%' OR
                    NIM LIKE '%$keyword%' OR
                    Jurusan LIKE '%$keyword%'";

    return query($query_search);
}

function upload() {
    $namaGambar = $_FILES["Gambar"]["name"];
    $errorUpload = $_FILES["Gambar"]["error"];
    $alamatGambar = $_FILES["Gambar"]["tmp_name"];
    $ukuranGambar = $_FILES["Gambar"]["size"];

    //Cek apakah gambar yang diupload
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $namaGambar);
    $ekstensiGambar = strtolower(end($ekstensi));

    if(!in_array($ekstensiGambar, $ekstensiValid)){
        echo "<script>
                alert('File yang diupload bukan gambar');
            </script>";
        return false;
    }

    //cek ukuran file
    if($ukuranGambar > 1000000){
        echo "<script>
                alert('File terlalu besar');
            </script>";
        return false;
    }

    //Ganti nama file
    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $ekstensiGambar;

    move_uploaded_file($alamatGambar, 'img/' . $namaBaru);

    return $namaBaru;
}
?>