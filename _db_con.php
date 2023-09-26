<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "test_db";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(!$conn){
        echo "connecton field";
    }
    
    
?>