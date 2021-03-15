<?php
    echo('Hello world');

    $servername = 'remotemysql.com';
    $username = "FkhGuWFtGI";
    $password = "9kRwNvqeLf";
    $dbname = "FkhGuWFtGI";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM pracownicy WHERE dzial = 2";
    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td>");
            echo("</tr>");
        };
    echo("</table>");
?>