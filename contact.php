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

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>

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
                        <li><a class="hvr-reveal" href="profile.php">PROFILE</a></li>
                        <li><a class="hvr-reveal" href="sos.php">SOS</a></li>
                        <li><a class="hvr-reveal" href="team.php">TEAM</a></li>
                        <li><a class="active_tag" href="contact.php">CONTACT</a></li>
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
                        <h5><a href="home.php">HOME</a> <span class="well_1"><i class="fa fa-caret-right"></i></span><a href="contact.php"> CONTACT</a>
                            <h5>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title">
                        <h2>CO<span class="title_border">NTA</span>ICT</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 contact_middle_left clearfix">
                    <div class="contact_middle_left_inner">
                        <h5>My Address: <span class="ready_2">Menofia Shebin Elkom</span></h5>
                        <h5>Phone: <a href="#">01098367311</a> </h5>
                        <h5>Fax: <a href="#">2.855.294.7353</a> </h5>
                        <h5>E-mail: <a href="#"><span class="ready_2">ahmedmostafafeky@gmail.com</span></a> </h5>
                        <h5>Face Book:<a href="#">@ahmedmostafafeky</a> </h5>
                        <h5>Twittwe: <a href="#">@ahmedmostafafeky</a> </h5>
                    </div>
                </div>
                <div class="col-sm-7 contact_middle_right clearfix">
                    <div class="contact_middle_right_inner_1">
                        <input type="text" class="form-control" placeholder="Name: ">
                    </div>
                    <div class="contact_middle_right_inner_1">
                        <input type="text" class="form-control" placeholder="E-mail: ">
                    </div>
                    <div class="contact_middle_right_inner_1">
                        <input type="text" class="form-control" placeholder="Telephone: ">
                        <textarea placeholder="Message: " class="form-control form-control_mass"></textarea>
                        <p><a href="#">Submit</a></p>
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