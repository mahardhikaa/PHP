<?php
//Cek apakah sudah login
session_start();
if(isset($_SESSION["login"])){
    header('location: index.php');
    exit;
}

require "function.php";

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
                alert('User berhasil didaftarkan')    
            </script>";
    }
    else{
        echo "<script>
                alert('User gagal didaftarkan')    
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Registrasi User</h1>
    <form action="" method="post">
        <table cellspacing=0 cellpadding=10 border=1>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
            <td>
                <label for="password">Password: </label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
            <td>
                <label for="confirmPass">Konfirmasi Password: </label></td>
                <td><input type="password" name="confirmPass" id="confirmPass"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <button type="submit" name="register">Sign Up</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>