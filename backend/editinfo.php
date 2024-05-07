<?php

session_start();

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 

mysqli_select_db($con,$dbName);

$id = $_SESSION['id'];


$na = $_POST['na'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$nid = $_POST['nid'];

$sql = "UPDATE userinfo SET name = '$na', username = '$username', email = '$email', phone = '$phone', password = '$password', nid = '$nid' WHERE id = '$id'";

if ($con->multi_query($sql) === TRUE) {
    echo "<h1>Updated successfully!</h1>";
    $_SESSION['username'] = $username;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>

<html>
    <head>
        <style>
            body {
                background-color: #045c86;
            }
        </style>
    </head>
</html>