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
    <a href="index.php">Pracownicy</a>
    <a href="funkAgregujaca.php">Funkcje agregujące</a>
    <a href="orgPracownicy.php">Organizacja i pracownicy</a>
</body>
</html>
<?php
    require_once("connect.php");

    $sql = "SELECT SUM(zarobki) as suma FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<li>ok";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['suma']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT SUM(zarobki) as suma FROM pracownicy, organizacja WHERE id_org = dzial AND imie LIKE '%a'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 2</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['suma']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT SUM(zarobki) as suma FROM pracownicy, organizacja WHERE id_org = dzial AND imie NOT LIKE '%a' AND (dzial = 2 OR dzial = 3)";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 3</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Suma</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['suma']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT AVG(zarobki) as sr FROM pracownicy, organizacja WHERE id_org = dzial AND imie NOT LIKE '%a'";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 4</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Średnia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sr']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT AVG(zarobki) as sr FROM pracownicy, organizacja WHERE id_org = dzial AND dzial = 4";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 5</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Średnia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sr']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT AVG(zarobki) as sr FROM pracownicy, organizacja WHERE id_org = dzial AND imie NOT LIKE '%a' AND (dzial = 1 OR dzial = 2)";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 6</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Średnia</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sr']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT count(imie) as liczba_pracownikow FROM pracownicy, organizacja WHERE id_org = dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 4</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Liczba pracownikow</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['liczba_pracownikow']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT count(imie) as liczba_pracownikow FROM pracownicy, organizacja WHERE id_org = dzial AND imie LIKE '%a' AND (dzial = 1 OR dzial = 3)";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 4</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>liczba kobiet</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['liczba_pracownikow']."</td>");
            echo("</tr>");
        };
    echo("</table>");
?>