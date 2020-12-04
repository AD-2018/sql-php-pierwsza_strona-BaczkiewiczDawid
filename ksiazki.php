<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="name">Dawid Bączkiewicz nr1</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-BaczkiewiczDawid" class="github-link">github</a>
    <br>
    <nav class="nav">
        <a href="index.php">Pracownicy</a>
        <a href="funkAgregujaca.php">Funkcje agregujące</a>
        <a href="orgPracownicy.php">Organizacja i pracownicy</a>
        <a href="dataczas.php">Data i czas</a>
        <a href="formularz.html">Formularz</a>
        <a href="danedobazy.php">Dane do bazy</a>
        <a href="ksiazki.php">Ksiazki</a>
    </nav>
</body>
</html>
<?php
require_once("connect.php");

$sql = "SELECT * FROM biblAutor";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblAutor</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>Autor</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['autor']."</td>");
        echo("</tr>");
    };
echo("</table>");
?>