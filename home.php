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
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
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
                        <li><a class="active_tag" href="home.php">HOME</a></li>
                        <li><a class="hvr-reveal" href="profile.php">PROFILE</a></li>
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
                    <div class="title">
                        <h2>HOME</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="header_3" class="clearfix">
        <div class="center clearfix">
            <div id="carousel" class="carousel slide carousel-fade">

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div data-slide-no="0" class="item carousel-item active">
                        <img width="100%" src="images/1.jpg" alt="">
                        <div class="carousel-caption">
                            <h4><span class="helper_1">We</span>'ll Care You!</h4>
                            <p>We Are Giving The Paramedic A Fast Brief About The Pationt In Emergency Cases, <br>
                                Making A Health Profile With All Medical Visits To The Hospital
                            </p>
                        </div>
                    </div>
                    <div data-slide-no="1" class="item carousel-item">
                        <img width="100%" src="images/2.jpg" alt="">
                        <div class="carousel-caption">
                            <h4><span class="helper_1">!سوف</span> نهتم <span class="ready_1">بك</span></h4>
                            <p>نعطي المسعف موجزًا ​​سريعًا عن المريض في حالات الطوارئ، <br> ونقوم بعمل ملف صحي مع جميع
                                الزيارات الطبية إلى المستشفى
                            </p>
                        </div>
                    </div>
                    <div data-slide-no="2" class="item carousel-item">
                        <img width="100%" src="images/3.jpeg" alt="">
                        <div class="carousel-caption">
                            <h4><span class="helper_1">Nos</span> cura <span class="ready_1">te! </span></h4>
                            <p>Nos damus Paramedic ieiunium Brevis De Pationt in Subitis causis, <br> Salutem Profile
                                Cum omnes Medical visitationes ad hospitale
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xxRN#carousel"
                    data-slide="prev">‹</a>
                <a class="carousel-control right" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xxRN#carousel"
                    data-slide="next">›</a>
            </div>
        </div>
    </section>

    <section id="main_1" class="clearfix">
        <div class="main_1 clearfix">
            <div class="clearfix">
                <div class="col-sm-8 main_1_top_inner">
                    <img src="images/4.jpg" width="100%">
                </div>
            </div>
            <div class="main_1_bottom clearfix">
                <div class="clearfix">
                    <div class="col-sm-4 clearfix"></div>
                    <div class="col-sm-8 main_1_bottom_inner clearfix">
                        <div class="discover clearfix">
                            <h4>Just With</h4>
                            <h2>HealthSure</h2>
                            <h3>You Can Save Somebody!</h3>
                        </div>
                    </div>
                </div>
                <h2></h2>
            </div>
        </div>
    </section>

    <section id="main_2" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="main_2 clearfix">
                    <div class="main_2_top clearfix">
                        <div class="col-sm-8 main_2_top_left clearfix">
                            <div class="col-sm-9 testing_left clearfix">
                                <div class="main_2_top_left_inner">
                                    <h3><span class="ready_3">HOW</span> To Use</h3>
                                    <p>Just <br> Scan <br> The <br> Qr-Qode <br> Then <br> open <br> profile</p>
                                    <h2>Save The Life</h2>
                                    <h5>Done!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main_2_bottom clearfix">
                        <div class="main_2_bottom_inner clearfix">
                            <div class="col-sm-4 main_2_bottom_inner_left clearfix"></div>
                            <div class="col-sm-8 main_2_bottom_inner_right clearfix">
                                <div class="paitent clearfix">
                                    <img src="images/5.jpg" width="100% " style="width:670px; height:524px;">
                                </div>
                            </div>
                        </div>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="main_5" class="clearfix">
        <div class="main_5_head clearfix">
            <div class="container">
                <div class="row">
                    <div class="main_5 clearfix">
                        <div class="main_5_middle clearfix">
                            <div class="col-sm-6 main_5_middle_left clearfix">
                                <div class="main_5_top clearfix">
                                    <h4>Get <span class="ready_3">in T</span>ouch</h4>
                                </div>
                                <div class="main_5_middle_left_inner">
                                    <input class="form-control form-control_1" type="text" placeholder="Your name">
                                    <input class="form-control form-control_1" type="text" placeholder="Your e-mail">
                                    <input class="form-control form-control_1" type="text" placeholder="Your phone">
                                    <textarea placeholder="Message..." class="form-control form-control_2"></textarea>
                                    <p><a href="#">Send</a></p>
                                </div>
                            </div>
                            <div class="col-sm-6 clearfix">
                                <div class="main_5_middle_left_inner_1">
                                    <a href="#"><img src="images/main_5_img.jpg"
                                            style="width:600px; height: 600px;"></a>
                                </div>
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