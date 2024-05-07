<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthSure</title>
    <style>
        body {
            background-color: #2098D1;
        }
        h1 {
            text-align:center;
            margin:40px;

        }
        a {
            text-decoration:none;
            padding : 20px;
            font-size: 40px;
        }
        
    </style>
</head>
<body>

<?php

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 

mysqli_select_db($con,$dbName);

$na = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$nid = $_POST['nid'];

if(isset($_FILES['pimg'])){
    $img_name = $_FILES['pimg']['name'];
    $img_size = $_FILES['pimg']['size'];
    $tmp_name = $_FILES['pimg']['tmp_name'];
    $error = $_FILES['pimg']['error'];

    if($error === 0) {
        if ($img_size > 12500000) {
            echo "<h1>Image is too large</h1>";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_1c = strtolower($img_ex);
            $allowed_ex = array ("jpg", "jpeg", "png");
            
            if (in_array($img_ex_1c,$allowed_ex)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_1c;
                $img_upload_path = 'proimgs/'.$new_img_name;
                
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO userinfo (name, username, email, phone, password, nid, img) VALUES ('$na', '$username', '$email', '$phone', '$password', '$nid','$new_img_name');";

                if ($con->multi_query($sql) === TRUE) {
                    echo "<h1>You Are successfully Register!</h1> <a href='../signin.php'>log in</a>";

                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }

                
            } else {
                echo "<h1>Yot can't upload file of this type!</h1>";
            }
        }
    }else {
        
        echo "<h1>unknown error occurred!</h1>";
    }


} else {
    header("Location: ../signup.php");
}





?>
</body>
</html>
