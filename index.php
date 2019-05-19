<?php
include 'auth.php';

$conn=OpenConnection();

$result = mysqli_query($conn,"Select count(1) FROM Project_User");
$num = mysqli_fetch_array($result,MYSQLI_ASSOC);
$num=implode($num);
$content=<<<END
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health_Web_home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">Health Dashboard</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="team.html">Our Team</a></li><!--To describe the Team-->
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form><span class="navbar-text"> <a href="login.php" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="register.php">Register</a></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>Inventing Technology to save lifes.</h1><p>$num Happey users.
                        <p>Dedicate Data save life</p>
                        <p>"To keep the body in good health is a duty... otherwise we shall not be able to keep our mind strong and clear.-Buddha"</p></div>
                    <div
                        class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img src="assets/img/health_icon.jpg" class="device"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
     <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 item text">
                        <center><h3>Halmstad Web Team</h3></center>
                        <center><p>Learn || Code || Repeat</p></center>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="github.com/amitkr936"><i class="icon ion-social-github"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">a3i7k4 © 2019</p>
            </div>
        </footer>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>
END;
echo $content;
?>