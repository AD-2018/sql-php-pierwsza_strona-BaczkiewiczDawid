<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/gridTwo.css">
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
        <?php include_once('../assets/grid_nav.php') ?>
        </div>
        <div class="strona">
            <header>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM pracownicyFirmy";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>nazwisko</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["nazwisko"].'</td>
                        
                        <td>
                        <form action="delete_pracownicyFirmy.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="X">
                        </form>   
                        </td>
                        
                        ');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </header>
            <nav>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM rolaFirma";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>rola</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["rola"].'</td>
                        
                        <td>
                        <form action="delete_rolaFirmy.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="X">
                        </form>   
                        </td>
                        
                        ');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </nav>
            <main>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "select firma.id, nazwisko, rola from pracownicyFirmy, rolaFirma, firma WHERE pracownicyFirmy.id = firma.pracownikID AND rolaFirma.id = firma.rolaID";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>nazwisko</th><th>rola</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["nazwisko"].'</td><td>'.$row["rola"].'</td>
                        
                        <td>
                        <form action="delete_firma.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="X">
                        </form>   
                        </td>
                        
                        ');
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </main>
            <aside>
                
            </aside>
            <footer>
                
            </footer>
            <footer id="footer2"></footer>
        </div>
</body>
</html>