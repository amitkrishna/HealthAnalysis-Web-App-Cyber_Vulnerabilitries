<?php
include 'auth.php';
$conn=OpenConnection();

session_start();
$usr=$_SESSION["user"];
$result = mysqli_query($conn,"SELECT * FROM Project_User_Details WHERE username='{$usr}'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($usr == null)
{
  echo "You have no session";
  header("Location: http://ideweb2.hh.se/~amikri19/project/index.php");
}
$content=<<<END
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Welcome $usr</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script>
    
    </script>
  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
                <a href="dashboard.php"><img src="hej.png"></a>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="no_of_steps.php">
              Number of Steps <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="energy.php">
              Energy
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="w_distance.php">
              Walking Distance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="b_time.php">
              Bed Time
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="get_up_time.php">
              Get Up Time
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="sleep_time.php">
              Sleep Timing
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="no_naps.php">
              Number of Naps Per Day. 
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="outdoor_temp.php">
              Outdoor Temperature
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="indoor_temp.php">
              Indoor Temperature
            </a>
          </li>
           <li style="background-color:powderblue;" class="nav-item">
            <a class="nav-link" href="logout.php">
              Logout
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <a class="d-flex align-items-center text-muted" href="#">
          </a>
        </h6>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome $usr</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
	  			 <div id="graphCanvas" class="chart-container"></div>

    </main>
  </div>
</div>
<center>
<form method="POST" action="insert.php">
</div class="main" style="float:center;">
      <p>Enter Date:&nbsp;<input type="date" min="2000-01-01" max="2058-12-31" name="get_up_time_date"></p>
      <p>Enter Get Up Time:&nbsp;<input type="time" required name="get_up_time"></p>
      <p><a class="btn btn-light action-button" name="no_of_steps_submit" role="submit"><input type="submit"></a></p>   
</div>
</form>
</center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
       <script type="text/javascript" src="b_time.js"></script>
	   <script type="text/javascript" src="js/jquery.min.js"></script>
	   <script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>
	   <!-- OR use a specific plotly.js release (e.g. version 1.5.0) -->
		<script src="https://cdn.plot.ly/plotly-1.5.0.min.js"></script>

<!-- OR an un-minified version is also available -->
		<script src="https://cdn.plot.ly/plotly-latest.js" charset="utf-8"></script>
     </body>
</html>
END;
echo $content;

?>