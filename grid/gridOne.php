<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/gridOne.css">
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

                    $sql = "SELECT * FROM mechanik";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>nazwisko</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["nazwisko"].'</td>
                    
                        <td>
                            <form action="delete_mechanik.php" method="POST">
                                <input type="text" name="id" value="'.$row["id"].'" hidden>
                                <input type="submit" value="X">
                            </form>   
                        </td>  '

                        );
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </header>
            <nav>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "SELECT * FROM samochod";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>rejestracja</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["rejestracja"].'</td>
                    
                        <td>
                        <form action="delete_samochod.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="X">
                        </form>   
                        </td>'
                        
                    );
                        echo("</tr>");
                    };
                    echo("</table>");
                ?>
            </nav>
            <main>
            <?php
                    require_once("../assets/connect.php");

                    $sql = "select warsztat.id, nazwisko, rejestracja from mechanik, samochod, warsztat WHERE mechanik.id = warsztat.mechanikID AND samochod.id = warsztat.samochodID";
                    $result = mysqli_query($conn, $sql);

                    echo("<table border='1'>");
                        echo("<th>ID</th><th>mechanik</th><th>samochod</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                        echo("<tr>");
                        echo('<td>'.$row["id"].'</td><td>'.$row["nazwisko"].'</td><td>'.$row['rejestracja'].'</td>
                        
                        <td>
                        <form action="delete_warsztat.php" method="POST">
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
        </div>
    </div>
</body>
</html>