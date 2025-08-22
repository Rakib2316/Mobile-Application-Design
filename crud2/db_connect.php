<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "dbms";//jodi database Q e diye dei tokon ata use hobe

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else{
    echo "Database Connect Successfully!";
}




//mysqli_close($conn);
?>