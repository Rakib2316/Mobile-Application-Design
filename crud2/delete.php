<?php
 include 'db_connect.php';

$sql = "DELETE FROM student WHERE id=101";
echo "<br>";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>