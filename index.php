<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dawid Bączkiewicz nr1</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-BaczkiewiczDawid">github</a>
    <br>
    <a href="orgPracownicy.php">Organizacja i Pracownicy</a>
    <a href="funkAgregujaca.php">Funkcje agregujące</a>
</body>
</html>
<?php
    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND dzial = 2";
    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>dzial</th><th>zarobki</th><th>Data urodzenia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //------------------------------------

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND (dzial = 2 OR dzial = 3)";
    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 2</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>dzial</th><th>zarobki</th><th>Data urodzenia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>");
            echo("</tr>");
        };
    echo("</table>");

    //-----------------------------------

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND zarobki < 30";
    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 3</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>dzial</th><th>zarobki</th><th>Data urodzenia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>");
            echo("</tr>");
        };
    echo("</table>");
?>
