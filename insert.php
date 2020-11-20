<?php
echo("jestes w insert.php");
echo $_POST['imie'];

$servername = "remotemysql.com";
$username = "FkhGuWFtGI";
$password = "9kRwNvqeLf";
$dbname = "FkhGuWFtGI";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
     VALUES (null," .$_POST['imie'].", 3, 36,'1995-10-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>