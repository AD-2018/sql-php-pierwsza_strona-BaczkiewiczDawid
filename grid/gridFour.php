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
        <?php include_once('../assets/grid_nav.php') ?>
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