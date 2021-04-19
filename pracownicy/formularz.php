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
        <?php include_once('../assets/main_nav.php') ?>
        </div>
        <div class="strona">
            <form action="strona.php" method="POST">
                <input type="text" name="firstname"><br>
                <input type="submit" value="Wyślij do strona.php">
            </form>
        </div>
    </div>
</body>
</html>