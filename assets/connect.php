<?php
    $servername = $_SERVER["SERVER_NAME"];
    $username = $_SERVER["USERNAME"];
    $password = $_SERVER["PASSWORD"];
    $dbname = $_SERVER["DBNAME"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>