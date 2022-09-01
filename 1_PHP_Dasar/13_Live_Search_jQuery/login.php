<?php
session_start();
require "function.php";

//cek cookie masih ada atau engga
if(isset($_COOKIE['id']) && isset($_COOKIE['username'])){
    $id = $_COOKIE['id'];

    $query_id = "SELECT * FROM users WHERE id = '$id'";
    $result_id = mysqli_query($conn, $query_id);
    $data_id = mysqli_fetch_assoc($result_id);

    if($id==$data_id['id'] && $_COOKIE['username']===hash('sha256', $data_id['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header('location: index.php');
    exit;
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);

        if(password_verify($password, $data["password"])){
            //start session
            $_SESSION["login"] = true;

            //cek cookie
            if(isset($_POST['remember'])){
                setcookie('id', $data['id'], time()+60);
                setcookie('username', hash('sha256', $data['username']), time()+60);
            }
         
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        p {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error)) : ?>
        <p>username/password salah</p>
    <?php endif ?>

    <form action="" method="post">
        <table cellspacing=0 cellpadding=10 border=2>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>