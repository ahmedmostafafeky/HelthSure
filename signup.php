<!DOCTYPE html >
<html lang="en" class="body-html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthSure</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
</head>

<body class="signup_body">


  <div class='login'>
    <h2>Register</h2>
    <form action="backend/registration.php" method="post" enctype="multipart/form-data">
    <input required name='name' placeholder='Fullname' type='text'>
      <input required name='username' placeholder='Username' type='text'>
      <input required id='pw' name='password' placeholder='Password' type='password'>
      <input required name='email' placeholder='E-Mail Address' type='text'>
      <input required name='phone' placeholder='Mobile Number' type='text'>
      <input required name='nid' placeholder='National Id' type='text'>
      <input required name='pimg' style = "margin: 20px 0px;  background: #1FCE6D; color: #435160; width: 100%; padding: 10px"  type='file'>
      
      <div class='agree'>
        <input id='agree' name='agree' type='checkbox'>
        <label for='agree'></label>Accept rules and conditions
      </div>
      <input class='animated' type='submit' value='Register'>
      <a class='forgot' href='signin.php'>Already have an account?</a>
    </form>
  </div>

</body>

</html>