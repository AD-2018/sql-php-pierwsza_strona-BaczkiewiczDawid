<?php
    $servername = "172.16.131.125";
    $username = "z_ghj";
    $password = "cxz";
    $dbname = "z_ghj";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT imie, zarobki, data_urodzenia FROM pracownicy";

    echo("<h1>Zadnaie 1</h1>");
    echo("<h2>".$sql."</h2>");

    $result = mysqli_query($conn, $sql);

    echo('<table border="1" class="tabelka_moja">');
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
            echo("</tr>");
        }
    echo("</table>")
?>