  
<?php
require_once("../assets/connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM mechanik WHERE id=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: gridOne.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  };

$conn->close();
?>