<?php
require_once("../assets/connect.php");



$sql = "INSERT INTO biblAutor (id, autor) 
VALUES (null,'" .$_POST['autor']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: ksiazki.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};

$conn->close();

?>