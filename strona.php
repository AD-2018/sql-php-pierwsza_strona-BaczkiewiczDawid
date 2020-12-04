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
    </nav><br>
</body>
</html>
<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	
	echo("<li>".$_POST["firstname"]);
		
	echo("<ul>");
?>