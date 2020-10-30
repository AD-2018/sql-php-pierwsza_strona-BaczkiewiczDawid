<?php
    $servername = "remotemysql.com";
    $username = "FkhGuWFtGI";
    $password = "Oxjz8eZoRW";
    $dbname = "FkhGuWFtGI";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>