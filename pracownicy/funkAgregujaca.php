<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawid Bączkiewicz</title>
    <link rel="stylesheet" href="../assets/styles.css">
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
            <a href="../index.php">Pracownicy</a><br>
            <a href="funkAgregujaca.php">Funkcje agregujące</a><br>
            <a href="orgPracownicy.php">Organizacja i pracownicy</a><br>
            <a href="dataczas.php">Data i czas</a><br>
            <a href="formularz.html">Formularz</a><br>
            <a href="danedobazy.php">Dane do bazy</a><br>
            <a href="./ksiazki/ksiazki.php">Ksiazki</a><br>
            <a href="../flexbox/flexbox.html">Flexbox</a><br>
        </div>
    <div class="strona">
    <?php
require_once("../assets/connect.php");

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

    echo("<h1>Zadanie 7</h1>");
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

    echo("<h1>Zadanie 8</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>liczba kobiet</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['liczba_pracownikow']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    echo("<h1>Group by</h1>");

    $sql = "SELECT sum(zarobki), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 9</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>suma zarobkow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sum(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT count(imie), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 10</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Ilosc pracownikow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['count(imie)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT avg(zarobki), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 11</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>avg zarobkow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['avg(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT sum(zarobki), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 12</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>suma zarobkow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sum(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT sum(zarobki), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 13</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>suma zarobkow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sum(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    echo("<h1>klauzula HAVING</h1>");

    $sql = "SELECT sum(zarobki), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial HAVING sum(zarobki) < 28";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 14</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>suma zarobkow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sum(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT sum(zarobki), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial HAVING sum(zarobki) > 30";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 15</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>suma zarobkow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['sum(zarobki)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");

    //-------------------------------------------------------------

    $sql = "SELECT count(imie), nazwa_dzial FROM pracownicy, organizacja WHERE id_org = dzial GROUP BY nazwa_dzial HAVING count(imie) > 3";

    $result = mysqli_query($conn, $sql);

    echo("<h1>Zadanie 16</h1>");
    echo("<h2>".$sql."</h2>");

    echo("<table border='1'>");
    echo("<th>Ilosc pracownikow</th><th>nazwa dzial</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['count(imie)']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");
?>
    </div>
    </div>
</body>
</html>
