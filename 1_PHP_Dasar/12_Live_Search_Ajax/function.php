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
    $gambarLama = htmlspecialchars($update["gambarLama"]);

    if($_FILES["Gambar"]["error"] == 4){
        $gambar = $gambarLama;
    }
    else {
        $gambar = upload();
    }

    $query_update = "UPDATE mahasiswa SET 
                    nama = '$nama',
                    NIM = '$NIM',
                    Jurusan = '$jurusan',
                    Gambar = '$gambar'
                    WHERE id=$id";

    $db = mysqli_query($conn, $query_update);

    return mysqli_affected_rows($conn);
}

function search($searching, $dataAwal, $dataHalaman){
    $keyword = $searching["search"];

    $query_search = "SELECT * FROM mahasiswa
                    WHERE nama LIKE '%$keyword%' OR
                    NIM LIKE '%$keyword%' OR
                    Jurusan LIKE '%$keyword%'
                    LIMIT $dataAwal, $dataHalaman";

    return query($query_search);
}

function upload() {
    $namaGambar = $_FILES["Gambar"]["name"];
    $errorUpload = $_FILES["Gambar"]["error"];
    $alamatGambar = $_FILES["Gambar"]["tmp_name"];
    $ukuranGambar = $_FILES["Gambar"]["size"];

    //cek apakah sudah ada file gambar
    if($errorUpload==4){
        echo "<script>
                alert('File gambar tidak boleh kosong');
            </script>";
        return false;
    }

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

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirmPass = mysqli_real_escape_string($conn, $data["confirmPass"]);

    $cekUser = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($cekUser)){
        echo "<script>
                alert('username sudah dipakai'); 
            </script>";
        return false;
    }

    if($password !== $confirmPass){
        echo "<script>
                alert('password tidak sama'); 
            </script>";
        return false;
    }

    $passBaru = password_hash($password, PASSWORD_DEFAULT);
    $query_addUser = "INSERT INTO users VALUES
                    ('', '$username', '$passBaru')";
    mysqli_query($conn, $query_addUser);

    return mysqli_affected_rows($conn);
}
?>