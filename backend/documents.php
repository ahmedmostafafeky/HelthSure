<?php

session_start();

$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "142000";  
$dbName     = "helthsure";  

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 

mysqli_select_db($con,$dbName);

$id = $_SESSION['id'];
$desc = $_POST['desc'];


if(isset($_POST['submit']) && isset($_FILES['proimg'])){
    $img_name = $_FILES['proimg']['name'];
    $img_size = $_FILES['proimg']['size'];
    $tmp_name = $_FILES['proimg']['tmp_name'];
    $error = $_FILES['proimg']['error'];

    if($error === 0) {
        if ($img_size > 1250000) {
            echo "<h1>image size is large!</h1>";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_1c = strtolower($img_ex);
            $allowed_ex = array ("jpg", "jpeg", "png");
            
            if (in_array($img_ex_1c,$allowed_ex)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_1c;
                $img_upload_path = 'upload/'.$new_img_name;
                
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO documents (id, description, img) VALUES ('$id', '$desc', '$new_img_name');";
                if ($con->multi_query($sql) === TRUE) {
                    echo "<h1>Added successfully!</h1>";
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
    header("Location: ../MedicalDocuments.php");
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