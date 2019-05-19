<?php
//For Admin Authentication(Admin Login) 
function OpenConnection()
{
  $server = "localhost";
  $username = "amikri19";
  $pwd = "hooO_FrB09";
  $database = "amikri19_db";
$conn=new mysqli($server,$username,$pwd,$database);
//Check Connections
if(mysqli_connect_errno())
{
    echo "Oops Connection ERROR";
    //redirect to DataBase error page
    return null;
}
else
{
      return $conn;
}
}

function CloseCon($conn)
 {
 $conn -> close();
 }
?>