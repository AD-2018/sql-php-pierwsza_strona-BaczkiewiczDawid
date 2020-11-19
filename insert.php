<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername = "remotemysql.com";
$username = "FkhGuWFtGI";
$password = "9kRwNvqeLf";
$dbname = "FkhGuWFtGI";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, $_POST['name'], 1, 76,'1991-11-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>