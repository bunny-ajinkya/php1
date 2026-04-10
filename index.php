<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL App</title>
</head>
<body>

<h2>User Form</h2>

<form method="POST">
Name: <input type="text" name="name" required><br><br>
Email: <input type="email" name="email" required><br><br>
<input type="submit" name="submit">
</form>

</body>
</html>

<?php
include 'db.php';

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name,email) VALUES ('$name','$email')";

if($conn->query($sql)){
    echo "Data Inserted";
}else{
    echo "Error";
}

}
?>

