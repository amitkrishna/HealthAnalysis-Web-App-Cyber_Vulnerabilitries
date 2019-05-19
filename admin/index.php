<?php
session_start();
$_SESSION["user"]=null;
session_destroy();
$content=<<<END
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthWeb_home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets2/css/styles.min.css">
</head>

<body>
    <div class="login-dark">
        <form method="post" action="insert.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input  type="text" name="log_name" placeholder="username"></div>
            <div class="form-group"><input  type="password" name="log_password" placeholder="Password"></div>
			<div class="form-group"><p style="color:white">username-admin<br/>password-admin</div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="Submit_Button">Log In</button></div>
            <!--<a href="register.php"><div class="form-group"><button class="btn btn-primary btn-block">Register</button></div></a>-->
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
END;
echo $content;
?>