<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawid Bączkiewicz</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="icon" 
      type="image/png" 
      href="../img/favicon.ico">
</head>
<body>
<div class="container">
        <div class="tytul">
            <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-BaczkiewiczDawid" class="github-link">github</a>
            <div class="imie">
                <h1 class="name">Dawid Bączkiewicz nr1</h1>
            </div>
        </div>
    </div>
    <div class="box">
    <div class="nav">
        <?php include_once('../assets/main_nav.php') ?> 
        </div>
        <div class="strona">
        <form action="insert-autor.php" method="POST" class="form">
	        <input type="text" name="autor" placeholder="Autor"><br>
            <input type="submit" value ="Dodaj Autora">
    </form>
    <form action="insert-tytul.php" method="POST" class="form">
	        <input type="text" name="tytul" placeholder="Tytuł"><br>
            <input type="submit" value ="Dodaj Tytuł">
</form>
    <br>
    <br>
        <?php
require_once("../assets/connect.php");

$sql = "SELECT * FROM biblAutor";

$result = mysqli_query($conn, $sql);

echo('<select name="autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_autor'].'">');
        echo($row['autor']);
        echo("</option>"); 
    }
echo('</select>');

$sql = "SELECT * FROM biblTytul";

$result = mysqli_query($conn, $sql);

echo('<select name="tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo('<option value="'.$row['id_tytul'].'">');
        echo($row['tytul']);
        echo("</option>"); 
    }
echo('</select>');

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

//--------------------------------------------------------------------

$sql = "SELECT * FROM biblTytul";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblTytul</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>Tytul</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
        echo("</tr>");
    };
echo("</table>");

//--------------------------------------------------------------------

$sql = "SELECT * FROM biblAutor_biblTytul";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblAutor_biblTytul</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>biblAutor_id</th><th>biblTytul_id</th><td>biblWypoz</td>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['biblAutor_id']."</td><td>".$row['biblTytul_id']."</td><td>".$row['biblWypoz']."</td>");
        echo("</tr>");
    };
echo("</table>");

//--------------------------------------------------------------------

$sql = "SELECT * FROM biblTytul, biblAutor WHERE biblTytul.id = biblAutor.id";

$result = mysqli_query($conn, $sql);

echo("<h1>BiblAutor_biblTytul</h1>");
echo("<h2>".$sql."</h2>");

echo("<table border='1'>");
echo("<th>ID</th><th>Autor</th><th>biblTytul</th>");
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['id']."</td><td>".$row['autor']."</td><td>".$row['tytul']."</td>");
        echo("</tr>");
    };
echo("</table>");
?>
        </div>
    </div>
</body>
</html>
