
<?php
include 'db_connect.php';
$sql = "INSERT INTO student
(Id,Name,Program, Email)
VALUES
(101, 'A' ,'CSE','rakib@gmail.com'),
(102, 'B','EEE','dipti@gmail.com'),
(103, 'C','CSE','Sohana@gmail.com'),
(104, 'D','EEE','Azim@gmail.com'),
(105, 'E','CSE','Ashik@gmail.com')";

if(mysqli_query($conn, $sql)){
    echo "New record created Successfully";
}
else{
   echo "Error: ".$sql . "<br>" . mysqli_error($conn);
}
?>