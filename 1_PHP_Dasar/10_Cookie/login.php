<?php
session_start();
if(isset($_SESSION["login"])){
    header('location: index.php');
    exit;
}

require "function.php";

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);

        if(password_verify($password, $data["password"])){
            //start session
            $_SESSION["login"] = true;

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
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>