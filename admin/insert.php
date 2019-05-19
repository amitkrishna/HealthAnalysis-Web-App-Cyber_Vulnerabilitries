<?php
include'auth.php';
$conn=OpenConnection();
if($conn== null)
{
	echo "Connection Error";
}
if(isset($_POST['reg_Username']))
{
        
        $pwd=$_POST['reg_password_c'];
        $user=$_POST['reg_Username'];
        $f_name=$_POST['reg_f_name'];
        $l_name=$_POST['reg_l_name'];
        $email=$_POST['reg_email'];
        $address=$_POST['reg_address'];
        $countr=$_POST['reg_country'];	
    //dashboard
     //Traverse through the user table and get to the user dashboard
        $sql = <<<END
        Insert INTO Project_User_Details(username,pwd,f_name,l_name,email,address,country) VALUES('{$user}','{$pwd}','{$f_name}','{$l_name}','{$email}','{$address}','{$countr}')
END;

$sql2 = <<<END
        Insert INTO Project_User(u_name,password) VALUES('{$user}','{$pwd}')
END;
        if(mysqli_query($conn,$sql))
        {
   //Redirect to Dashboard Page
            echo "Registered";
                if(mysqli_query($conn,$sql2))
                {
			header("Location:login.php");
                        mysqli_close($conn);
                }
                else{
                        echo "Error in Data Insertion:";
						header("Location:error.html");
                }
        }
        else
        {
//insert query goes here
               echo "User Already Exist";
			   header("Location:error.html");

        }

}


if(isset($_POST['log_name']))
{
    $pwd=$_POST['log_password'];
    $fusername=$_POST['log_name'];
//dashboar
 //Traverse through the user table and get to the user dashboard
$sql="SELECT * FROM Project_user_admin WHERE user='{$fusername}' AND password='{$pwd}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) !=0)
    {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
            echo "Sucess";
       //Redirect to Dashboard Page
       session_start();
       $_SESSION["user"]=$fusername;
        header("Location:dashboard/dashboard.php");
    }
    else
    {
   //insert query goes here
       echo "Please Register Or Please Check your User name or Password";
		
		header("Location:error.html");
    }

}


?>