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
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-BaczkiewiczDawid" class="github-link">github</a>
    <br>
    <nav class="nav">
        <a href="index.php">Pracownicy</a>
        <a href="funkAgregujaca.php">Funkcje agregujące</a>
        <a href="orgPracownicy.php">Organizacja i pracownicy</a>
        <a href="dataczas.php">Data i czas</a>
    </nav>
</body>
</html>
<?php
    require_once("connect.php");

    $sql = "SELECT * ,YEAR(CURDATE())-YEAR(data_urodzenia) AS wiek FROM pracownicy";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Wiek</th><th>ID</th><th>Imie</th><th>dzial</th><th>zarobki</th><th>Data urodzenia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td><td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE id_org = dzial AND nazwa_dzial='serwis'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 2</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Wiek</th><th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td><td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS sumalat FROM pracownicy";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 3</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma lat</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sumalat']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS wiek FROM pracownicy, organizacja WHERE id_org = dzial AND nazwa_dzial='handel'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 4</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma lat</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS wiek FROM pracownicy, organizacja WHERE id_org = dzial AND imie LIKE '%a'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 5</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma lat</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT sum(YEAR(curdate())-YEAR(data_urodzenia)) AS wiek FROM pracownicy, organizacja WHERE id_org = dzial AND imie NOT LIKE '%a'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 6</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma lat</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT avg(YEAR(curdate())-YEAR(data_urodzenia)) AS wiek, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 7</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>srednia lat</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT sm(YEAR(curdate())-YEAR(data_urodzenia)) AS wiek, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 8</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>suma lat</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, dzial, nazwa_dzial from pracownicy,organizacja WHERE id_org = dzial GROUP BY dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 9</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>najstarsi</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------

    $sql = "SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, dzial, nazwa_dzial from pracownicy,organizacja WHERE id_org = dzial AND (dzial = 'handel' OR dzial = 'serwis') GROUP BY dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 10</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>najmlodszy</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['wiek']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //--------------------------------------------

    $sql = "SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, dzial, nazwa_dzial, imie from pracownicy,organizacja WHERE id_org = dzial GROUP BY dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 11</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Imie</th><th>najmlodszy</th><th>Dzial</th><th>Nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //--------------------------------------------

    $sql = "SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS dni_zycia FROM pracownicy";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 12</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Imie</th><th>dni zycia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['imie']."</td><td>".$row['dni_zycia']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //--------------------------------------------

    $sql = "SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' ORDER BY data_urodzenia ASC LIMIT 1";

    $result = mysqli_query($conn, $sql);
    
    echo("<h1>Zadanie 13</h1>");
    echo("<h2>".$sql."</h2>");
    
    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>dzial</th><th>zarobki</th><th>Data urodzenia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
            echo("</tr>");
        };
    echo("</table>");
?>