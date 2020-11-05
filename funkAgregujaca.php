<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Strona główna</a>
</body>
</html>
<?php
    echo "Funkcje agregujące";

    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";
    echo("<h1>Zadanie 1</h1>");
    echo("<h2>".$sql."</h2>");


    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND imie like '%a'";
    echo("<h1>Zadanie 2</h1>");
    echo("<h2>".$sql."</h2>");


    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND imie not like '%a'";
    echo("<h1>Zadanie 4</h1>");
    echo("<h2>".$sql."</h2>");


    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND imie not like '%a'";
    echo("<h1>Zadanie 3</h1>");
    echo("<h2>".$sql."</h2>");


    $sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial AND imie not like '%a'";
    echo("<h1>Zadanie 5</h1>");
    echo("<h2>".$sql."</h2>");
?>