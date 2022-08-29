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

?>