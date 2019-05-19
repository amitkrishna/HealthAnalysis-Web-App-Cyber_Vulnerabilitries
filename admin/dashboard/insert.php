<?php
include'auth.php';
$conn=OpenConnection();
if($conn== null)
{
	echo "Connection Error";
}
session_start();
if(isset($_POST['no_of_steps_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Number_of_Steps(Username,Steps_per_day,Dates) VALUES('{$usr}','{$_POST['no_of_steps']}','{$_POST['no_of_steps_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['b_time_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_BedTime(Username,Bedtime,Dates) VALUES('{$usr}','{$_POST['bed_time']}','{$_POST['b_time_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['energy_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Energy(Username,Energy,Dates) VALUES('{$usr}','{$_POST['no_energy']}','{$_POST['energy_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}

if(isset($_POST['get_up_time_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Getup_Time(Username,GetupTime,Dates) VALUES('{$usr}','{$_POST['get_up_time']}','{$_POST['get_up_time_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['in_temp_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_IndoorTemp(Username,Indoor_Temp,Date) VALUES('{$usr}','{$_POST['in_temp']}','{$_POST['in_temp_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['no_of_naps_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Number_of_naps(Username,Naps,Date) VALUES('{$usr}','{$_POST['no_of_naps']}','{$_POST['no_of_naps_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['out_temp_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Outdoor_Temperature(Username,outdoor_temp,Date) VALUES('{$usr}','{$_POST['outdoor_temp']}','{$_POST['outdoor_temp_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['sleep_time_date']))
{
        $usr=$_SESSION["user"];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Sleeptime(username,SleepTime,Dates) VALUES('{$usr}','{$_POST['sleep_time']}','{$_POST['sleep_time_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
if(isset($_POST['w_distance_date']))
{
        $usr=$_SESSION["user"];
		echo $_POST['w_distance'];
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_Walking_dist(username,Walking_dist,Dates) VALUES('{$usr}','{$_POST['w_distance']}','{$_POST['w_distance_date']}')
END;

        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
   
           header("Location:dashboard.php");
        }
        else
        {
//insert query goes here
               echo "User Already Exist";

        }

}
?>