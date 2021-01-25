<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];

$servername = "remotemysql.com";
$username = "FkhGuWFtGI";
$password = "9kRwNvqeLf";
$dbname = "FkhGuWFtGI";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: danedobazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};

$conn->close();
?>