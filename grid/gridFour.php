<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/gridFour.css">
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
            <a href="gridOne.php">Grid1</a><br>
            <a href="gridTwo.php">Grid2</a><br>
            <a href="gridThree.php">Grid3</a><br>
            <a href="gridFour.php">Grid4</a><br>
            <a href="gridFive.php">Grid5</a><br>
            <a href="gridSix.php">Grid6</a><br>
            <a href="gridSeven.php">Grid7</a><br>
            <a href="gridEight.php">Grid8</a><br>
            <a href="gridNine.php">Grid9</a><br>
            <a href="gridTen.php">Grid10</a><br>
            <a href="gridEleven.php">Grid11</a><br>
            <a href="gridTwelve.php">Grid12</a><br>
        </div>
        <div class="strona">
            <header>
            </header>
            <nav>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM producent";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>producent</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["producent"].'</td>');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </nav>
            <main>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM produkt";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>produkt</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["produkt"].'</td>');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </main>
            <aside>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "select sklep.id, producent, produkt from producent, produkt, sklep WHERE producent.id = sklep.producentID AND produkt.id = sklep.produktID";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>producent</th><th>produkt</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["producent"].'</td><td>'.$row["produkt"].'</td>');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </aside>
            <footer>
                
            </footer>
        </div>
</body>
</html>