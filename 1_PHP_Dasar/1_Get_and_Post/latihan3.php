<!-- MEOTODE POST 
    Metode post dibuat dengan menggunakan form
    attribute name pada input akan berfungsi sebagai index array atau key
    lalu isi dari attribute name merupakan value dari key tersebut

    Metode post tidak disimpan ke dalam URL tetapi pada belakang layar (backend)
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Metode Post</title>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Metode Post</h1>
    <form action="latihan4.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>