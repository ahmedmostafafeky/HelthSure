<?php 
    session_start();
    $id = $_SESSION["id"];

    $dbHost     = "127.0.0.1";  
    $dbUsername = "root";  
    $dbPassword = "142000";  
    $dbName     = "helthsure";  

    $con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 
    mysqli_select_db($con,$dbName);
    
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    ///////////////////////////////////////////////////
    $sql1 = "SELECT * FROM mesrments WHERE id = '$id'";
    $result1 = mysqli_query($con, $sql1);  
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthSure</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>

<style>
        table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            width:100%;
            border: 1px solid black;
        }
        tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        td {
            padding: 12px 15px;
            border: 1px solid black;
        }


    </style>


<body>

    <section id="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <a class="navbar-brand" href="home.php"><span class="liner_1">Health</span><span
							class="liner_2">Sure</span></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="hvr-reveal" href="home.php">HOME</a></li>
                        <li><a class="active_tag" href="profile.php">PROFILE</a></li>
                        <li><a class="hvr-reveal" href="sos.php">SOS</a></li>
                        <li><a class="hvr-reveal" href="team.php">TEAM</a></li>
                        <li><a class="hvr-reveal" href="contact.php">CONTACT</a></li>
                        <li><a class="hvr-reveal" href="scann.php">QR-Code</a></li>
                    </ul>
                    <div class="profile">
                        <img class="avatar" src="backend/proimgs/<?=$_SESSION['img']?>">
                        <h5 class="username"><a href="profile.php"><?=$_SESSION['username']?></a></h5>
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <section id="header_2" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header_2">
                        <h5><a href="home.php">HOME</a>
                            <span class="well_1"><i class="fa fa-caret-right"></i></span> <a href="profile.php"> PROFILE</a>
                            <span class="well_1"><i class="fa fa-caret-right"></i></span> <a href="MedicalMeasurment.php"> Medical Measurment</a>
                            <h5>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title">
                        <h2>MEDICA<span class="title_border">L MEAS</span>URMENT</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medical-measurment">
        <div class="medical-measurment-top">
        <table>
            <tr>
                <td>blood pressure</td>
                <td>temperature</td>
                <td>heart rate</td>
                <td>breathing rate</td>
                <td>oxygen level in blood</td>
                <td>blood sugar level</td>
            </tr>
            <?php
                        echo "<tr><td>" . $row1["bloodpressure"] . "</td>";
                        echo "<td>" . $row1["temperater"] . "</td>";
                        echo "<td>" . $row1["hertrate"] . "</td>";
                        echo "<td>" . $row1["breathingrate"] . "</td>";
                        echo "<td>" . $row1["oxegynlevel"] . "</td>";
                        echo "<td>" . $row1["sugerinblood"] . "</td></tr>";
                        while($row1 = $result1->fetch_assoc()) {
                            echo "<tr><td>" . $row1["bloodpressure"] . "</td>";
                            echo "<td>" . $row1["temperater"] . "</td>";
                            echo "<td>" . $row1["hertrate"] . "</td>";
                            echo "<td>" . $row1["breathingrate"] . "</td>";
                            echo "<td>" . $row1["oxegynlevel"] . "</td>";
                            echo "<td>" . $row1["sugerinblood"] . "</td></tr>";
                        }
                    ?>
        </table>
        </div>
        <hr>
        <hr>
        <div class="medical-measurment-bottom">
        <div>
                <h3>Edit Measurments</h3>
                <form action = "backend/mesurments.php" method = "post">
                    <label class="plabel" for ="bloodpressure">Blood Pressure: </label>
                    <input name ="bloodpressure" class="edit-input" id="bloodpressure" type="text" value="<?php $row1["bloodpressure"]?>">
                    <label class="plabel" for ="Temperature">Temperature: </label>
                    <input name ="temperature" class="edit-input" id="Temperature" type="text">
                    <label class="plabel" for ="HeartRate">Heart Rate: </label>
                    <input name ="heartrate" class="edit-input" id="HeartRate" type="text">
                    <label class="plabel" for ="BreathingRate">Breathing Rate: </label>
                    <input name ="breathingrate" class="edit-input" id="BreathingRate" type="text"> 
                    <label class="plabel" for ="OxygenLevelInBlood">Oxygen Level In Blood: </label>
                    <input name ="OxygenLevelInBlood" class="edit-input" id="OxygenLevelInBlood" type="text">
                    <label class="plabel" for ="BloodSugarLevel">Blood Sugar Level: </label>
                    <input name ="BloodSugarLevel" class="edit-input" id="BloodSugarLevel" type="text">
                    <input class="edit-submit" type="submit" value = "Edit">
                </form>
            </div>
        </div>
    </section>

    <section id="footer" class="clearfix">
        <div class="col-sm-12">
            <div class="col-sm-3">
                <div class="footer_1">
                    <h4>Medicine</h4>
                    <p>Medicine is the science and practice of caring for a patient, managing the diagnosis, prognosis, prevention, treatment, palliation of their injury or disease, and promoting their health.
                    </p>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="footer_2">
                    <h4>DEVELOPERS</h4>
                    <ul>
                        <li><a href="#">Ahmed Mostafa</a></li>
                        <li><a href="#">Amr hegab</a></li>
                        <li><a href="#">Ramadan Mostafa</a></li>
                        <li><a href="#">Mohamed Salah</a></li>
                        <li><a href="#">Ahmed Ameer</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer_3">
                    <h4>Daily Mail </h4>
                    <p>Send your email so We can send to you information: </p>
                    <form>
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <h5><a href="#">Submit</a></h5>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer_4">
                    <h4>Author: </h4>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>Address: Sheben Elkom</li>
                        <li><i class="fa fa-phone"></i>Phones: <a href="#">01098367311</a></li>
                        <li><i class="fa fa-user"></i>The Earth is not always the same.</li>
                        <li><i class="fa fa-envelope"></i>E-mail:<a href="#"> ahmedmostafafeky@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="footer_main" class="clearfix">
        <div class="col-sm-12">
            <div class="footer_main_1">
                <p>© 2021 Helth Sure. All Rights Reserved. Design by<a href=""> AHMED MOSTAFA ELFEKY</a> </p>
            </div>
        </div>
    </section>

</body>

</html>