<?php

session_start();

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 

mysqli_select_db($con,$dbName);

$id = $_SESSION['id'];

$bloodtype = $_POST['btype'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$datebirth= $_POST['dbirth'];
$address = $_POST['adress'];

$sql = "INSERT INTO generalinfo (id, bloodtype, age, gender, dateofbirth, address) VALUES ('$id', '$bloodtype', '$age', '$gender', '$datebirth', '$address');";

if ($con->multi_query($sql) === TRUE) {
    echo "<h1>Added successfully!</h1>";
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