<?php

session_start();

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 

mysqli_select_db($con,$dbName);

$id = $_SESSION['id'];

$bloodpressure = $_POST['bloodpressure'];
$temperature = $_POST['temperature'];
$heartrate = $_POST['heartrate'];
$breathingrate = $_POST['breathingrate'];
$OxygenLevelInBlood= $_POST['OxygenLevelInBlood'];
$BloodSugarLevel = $_POST['BloodSugarLevel'];


$sql = "INSERT INTO mesrments (id, bloodpressure, temperater, hertrate, breathingrate, oxegynlevel, sugerinblood) VALUES ('$id', '$bloodpressure', '$temperature', '$heartrate', '$breathingrate', '$OxygenLevelInBlood', '$BloodSugarLevel');";

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