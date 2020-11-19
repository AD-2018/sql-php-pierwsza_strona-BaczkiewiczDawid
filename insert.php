<?php
echo("jestes w insert.php");
echo $_POST['name'];

$servername ="mysql-joannastanik.alwaysdata.net";
$username ="217138";
$password ="blkn7!J";
$dbname ="joannastanik_bazadanych";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, $_POST['name'], dzial, zarobki, data_urodzenia) 
       VALUES (null, 'Ksawery', 1, 76,'1991-11-21')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>