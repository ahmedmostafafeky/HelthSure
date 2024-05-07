<!DOCTYPE html>
<html lang="en" class="body-html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthSure</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>


</head>

<body class="login_body">

<div class='login'>
  <h2>Log in</h2>
  
  <form action="backend/login.php" method="post">
    <input name='email' placeholder='E-Mail Address' type='text'>
    <input id='pw' name='password' placeholder='Password' type='password'>
    <input class='animated' type='submit' value='Log In'>
    <a class='forgot' href='#'>Forget Password?</a>
  </form>
</div>

</body>

</html>