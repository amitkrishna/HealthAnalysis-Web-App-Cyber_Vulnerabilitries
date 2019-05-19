<?php
include 'auth.php';
$conn=OpenConnection();

session_start();
$usr=$_SESSION["user"];
$result = mysqli_query($conn,"SELECT * FROM Project_ipaddress WHERE 1");
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($usr == null)
{
  echo "You have no session";
  header("Location: http://ideweb2.hh.se/~amikri19/project/index.php");
}

// Get the client ip address
$ipaddress = $_SERVER['REMOTE_ADDR'];

$sql =<<<END
Insert INTO Project_ipaddress(username,ip) VALUES('{$usr}','{$ipaddress}')
END;
if(mysqli_query($conn,$sql))
{
	$i=0;
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
            <a class="nav-link active" href="user_ipaddress.php">
              IP Addresses-Users <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_details.php">
              User Details
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
      <center>
      
        
        <table id='admin'>
        <tr>
          <th>Username</th>&nbsp;
          <th>First Name</th>&nbsp;
          <th>Email</th>
        </tr><br/>
END;
		if(mysqli_num_rows($result) > 0){
        $content.=<<<END
		<table>
					<tr>
					<th>name</th>
					<th>Ip Address</th>
					</tr>
END;
        while($row = mysqli_fetch_array($result))
		{
            $content.=<<<END
			<tr>
						<td>{$row['username']}</td>
						<td>{$row['Ip']}</td>
						</tr><br/></table>
END;
        }
        // Free result set
        //mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
$content.=<<<END
        </table>
      </center>
      <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
     </body>
</html>
END;
echo $content;

?>