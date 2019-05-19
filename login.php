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
	<script>
	function validate()
	{

  var pass = document.getElementById('log_password').value;
  var usr= document.getElementById('log_user').value;
  var pass_RGEX = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
  var usr_REGX=/^[a-z]{4}/;
  
  var pass_Result = preg_match(pass_RGEX,pass);
  var alert=document.getElementById('error');
    if(pass_Result == false)
	{
		alert("Enter Valid Password" );
		alert.value="Enter  Valid User name or Password";
		return false;
	}
	else
	{
		return true;
	}

	}
	</script>
</head>

<body>
    <div class="login-dark">
        <form method="post" action="insert.php" onsubmit="validate()">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input  type="text" name="log_name" placeholder="username"></div>
            <div class="form-group"><input  type="password" name="log_password" placeholder="Password"></div>
            <div class="form-group"><input class="btn btn-primary btn-block" type="submit" value="Login" name="Submit_Button"></div>
            <div class="form-group"><p>Username must be Small Case <br/> Passwords must contain at least 1 upper case letter
<br/>Passwords must contain at least 1 lower case letter
<br/>Passwords must contain at least 1 number or special character
<br/>Passwords must contain at least 8 characters in length<br/>
Password maximum length should not be arbitrarily limited</p></div>
<!--<a href="register.php"><div class="form-group"><button class="btn btn-primary btn-block">Register</button></div></a>-->
			<p id="error" style="color:red"></p>
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
END;
echo $content;
?>