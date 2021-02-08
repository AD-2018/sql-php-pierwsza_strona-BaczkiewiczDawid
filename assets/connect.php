<?php
    $servername = "remotemysql.com";
    $username = "FkhGuWFtGI";
    $password = "9kRwNvqeLf";
    $dbname = "FkhGuWFtGI";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>