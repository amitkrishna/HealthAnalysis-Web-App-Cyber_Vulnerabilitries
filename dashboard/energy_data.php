<?php
header('Content-Type: application/json');
include 'auth.php';
$conn=OpenConnection();

session_start();
//setting header to json
header('Content-Type: application/json');
$usr=$_SESSION["user"];
$result = mysqli_query($conn,"SELECT Energy,Dates FROM Project_Energy WHERE username='{$usr}' ORDER BY Dates DESC");

$data=array();
while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
	$data[]=$row;
}

if($usr == null)
{
  echo "You have no session";
  header("Location: http://ideweb2.hh.se/~amikri19/project/index.php");
}




echo json_encode($data);

?>