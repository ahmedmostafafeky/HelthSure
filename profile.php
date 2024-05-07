<?php
// session_start();
// $id = $_SESSION["id"];
// $username = $_SESSION['username'];

// $dbHost     = "127.0.0.1";  
// $dbUsername = "root";  
// $dbPassword = "142000";  
// $dbName     = "helthsure";  

// $con = mysqli_connect($dbHost, $dbUsername, $dbPassword); 
// mysqli_select_db($con,$dbName);

// if(mysqli_connect_errno()) {  
//     die("Failed to connect with MySQL: ". mysqli_connect_error());  
// }
// ///////////////////////////////////////////////////
// $sql1 = "SELECT * FROM userinfo WHERE id = '$id'";
// $result1 = mysqli_query($con, $sql1);  
// $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); 
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
    <style>
        .a1 {
            margin: 0 20px;
        }

        h4 {
            margin: 40px 0;
        }
    </style>
</head>

<body>

    <section id="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
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
                        <img class="avatar" src="backend/proimgs/<?= $_SESSION['img'] ?>">
                        <h5 class="username"><a href="profile.php">
                                <?= $_SESSION['username'] ?>
                            </a></h5>
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
                        <h5><a href="home.php">HOME</a> <span class="well_1"><i class="fa fa-caret-right"></i></span> <a
                                href="profile.php"> PROFILE</a>
                            <h5>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title">
                        <h2>PR<span class="title_border">OFI</span>LE</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profile_header" class="clearfix">
        <div class="profile_head">
            <div class="container">
                <div class="row">
                    <div class="profile_head_inner clearfix">
                        <img style="width:500px; height:500px" src="backend/proimgs/<?= $_SESSION['img'] ?>">
                        <h4>
                            <?php echo $row1['name']; ?>
                        </h4>
                        <h4>Id:
                            <?php echo $row1['id']; ?>
                        </h4>
                        <h5><a class="a1" href="edit.php">Edit</a><a class="a1" href="backend/logout.php">
                                <input style="background: transparent; border:0;" type="submit" name="logout"
                                    id="logout" value="Logout"></a></h5>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profile_main" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="profile_main_middle clearfix">
                    <div class="col-sm-4 clearfix">
                        <div class="profile_main_middle_inner">
                            <h5><i class="fa fa-plus-circle"></i></h5>
                            <h4><a href="GeneralInformation.php">General Information</a></h4>
                            <p>General information about the user, blood type, age, gender, relative contacts ETC...</p>
                        </div>
                    </div>
                    <div class="col-sm-4 clearfix">
                        <div class="profile_main_middle_inner">
                            <h5><i class="fa fa-heart-o"></i></h5>
                            <h4><a href="MedicalProcedures.php">Medical Procedures</a></h4>
                            <p>Mdeical procedures that had to be done in Emergency Cases.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 clearfix">
                        <div class="profile_main_middle_inner">
                            <h5><i class="fa fa-user-plus"></i></h5>
                            <h4><a href="MedicalAppointments.php">Medical Appointments</a></h4>
                            <p>Medical Appointments, whan, where and why you go to the doctor.</p>
                        </div>
                    </div>
                </div>
                <div class="profile_main_middle clearfix">
                    <div class="col-sm-4 clearfix">
                        <div class="profile_main_middle_inner">
                            <h5><i class="fa fa-user-md"></i></h5>
                            <h4><a href="MedicalMeasurment.php">Medical Measurment</a></h4>
                            <p>Medical measurment, like Blood Pressure, Heart Rate, Blood Sugar Level ETC...</p>
                        </div>
                    </div>
                    <div class="col-sm-4 clearfix">
                        <div class="profile_main_middle_inner">
                            <h5><i class="fa fa-clock-o"></i></h5>
                            <h4><a href="MedicalHistory.php">Medical History</a></h4>
                            <p>Medical History, All the surgarys you have done and illneses.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 clearfix">
                        <div class="profile_main_middle_inner">
                            <h5><i class="fa fa-briefcase"></i></h5>
                            <h4><a href="MedicalDocuments.php">Medical Documents</a></h4>
                            <p>All Medical Documents, like medical rays, medical tests ETC...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="footer" class="clearfix">
        <div class="col-sm-12">
            <div class="col-sm-3">
                <div class="footer_1">
                    <h4>Medicine</h4>
                    <p>Medicine is the science and practice of caring for a patient, managing the diagnosis, prognosis,
                        prevention, treatment, palliation of their injury or disease, and promoting their health.
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