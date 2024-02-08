<?php
    $username = "root";
    $password = "";
    $dbname= "cms_activity";
    $servername = "localhost";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn->connect_error === true) {
        die("Error". $conn->connect_error);
    } 
?>