<?php
include 'db_connect.php';
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h2>Student List</h2>
    <table>
        <caption>All Registered Students</caption>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Program</th>
            <th>Email</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['Id']."</td>
                        <td>".$row['Name']."</td>
                        <td>".$row['Program']."</td>
                        <td>".$row['Email']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>



  


</body>
</html>
