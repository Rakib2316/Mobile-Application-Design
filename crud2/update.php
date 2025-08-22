<?php 
include 'db_connect.php';
$sql = "UPDATE student SET Program = 'Civil' WHERE ID=103";
echo "<br>";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>