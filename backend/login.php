<?php
session_start();

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 
mysqli_select_db($con,$dbName);

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$email = $_POST['email'];
$password = $_POST['password'];

if( $email == "" || $password == "") {
    header("Location: ../signin.php");
    exit();
}

    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select * from userinfo where email = '$email' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["img"] = $row['img'];
        header('location:../home.php');
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
        exit();
    }       
$con->close();
