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
    </nav><br>
    <h2>Dodawanie pracownika</h2>
    <form action="insert.php" method="POST">
	    <input type="text" name="imie" placeholder="imie" class="input"><br>
		<input type="number" name="dzial" placeholder="dzial" class="input"></br>
		<input type="number" name="zarobki" placeholder="zarobki" class="input"></br>
		<input type="date" name="data_urodzenia" class="input"></br>
		<input type="submit" value="dodaj pracownika" class="button">
    </form>
    <h3 class="delete-header">Usuwanie pracownika</h3>
    <form action="delete.php" method="POST">
        <input type="number" name="id" class="input"></br>
        <input type="submit" value="Usuń pracownika" class="button">
     </form>
</body>
</html>
<?php
require_once("connect.php");

$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

$result = mysqli_query($conn, $sql);

echo("<table border='1'>");
echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzial</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data_urodzenia'].'</td>'.
        '<td>
        <form action="delete.php" method="POST">
            <input type="number" name="id" value="'.$row['id_pracownicy'].'" hidden>
            <input type="submit" value="X">
        </form>
        </td>');
        echo('</tr>');
    };
echo("</table>");
?>