
<?php

$host = "php-mysql-db.cluster-cboe0s0kyghm.ap-south-1.rds.amazonaws.com";
$user = "admin";
$password = "password";
$db = "testdb";

$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>

