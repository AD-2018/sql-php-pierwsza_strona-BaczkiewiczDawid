<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dawid Bączkiewicz</title>
    <link rel="stylesheet" href="../assetss/style.css">
    <link rel="icon" 
      type="image/png" 
      href="../img/favicon.ico">
</head>
<body>
	<h1 class="name">Dawid Bączkiewicz nr1</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-BaczkiewiczDawid" class="github-link">github</a>
    <br>
    <nav class="nav">
    <a href="../index.php">Pracownicy</a><br>
    <?php include_once('../assets/main_nav.php') ?>
    </nav><br>
</body>
</html>
<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	
	echo("<li>".$_POST["firstname"]);
		
	echo("<ul>");
?>