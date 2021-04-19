<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/gridThree.css">
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
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM prawnicy";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>prawnik</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["prawnik"].'</td>');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </header>
            <nav>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM sprawy";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>sprawa</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["sprawa"].'</td>');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </nav>
            <main>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "select sad.id, prawnik, sprawa from prawnicy, sprawy, sad WHERE prawnicy.id = sad.prawnikID AND sprawy.id = sad.sprawaID";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>prawnik</th><th>sprawa</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["prawnik"].'</td><td>'.$row["sprawa"].'</td>');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </main>
            <aside>
                
            </aside>
            <footer>
                
            </footer>
        </div>
</body>
</html>