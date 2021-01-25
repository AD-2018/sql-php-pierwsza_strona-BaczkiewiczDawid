<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../styles.css">
</head>
<body>
	<h1 class="name">Dawid Bączkiewicz nr1</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-BaczkiewiczDawid" class="github-link">github</a>
    <br>
    <nav class="nav">
    <a href="../index.php">Pracownicy</a><br>
        <a href="funkAgregujaca.php">Funkcje agregujące</a><br>
        <a href="orgPracownicy.php">Organizacja i pracownicy</a><br>
        <a href="dataczas.php">Data i czas</a><br>
        <a href="formularz.html">Formularz</a><br>
        <a href="danedobazy.php">Dane do bazy</a><br>
        <a href="../Książki/ksiazki.php">Ksiazki</a><br>
    </nav><br>
</body>
</html>
<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	
	echo("<li>".$_POST["firstname"]);
		
	echo("<ul>");
?>