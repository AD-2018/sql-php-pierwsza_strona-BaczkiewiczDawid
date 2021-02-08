<?php
echo("jestes w insert.php");
echo $_POST['imie'];

require_once("../connect.php");

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
     VALUES (null,'" .$_POST['imie']."', ".$_POST['dzial'].", ".$_POST['zarobki'].", '" .$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>