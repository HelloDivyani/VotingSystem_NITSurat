<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SVNIT Online Voting System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>
<img src="images\l.jpg" alt="logo" style="margin-top:0px;margin-left:700px" width="100px" height="100px"/>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">NIT SURAT </h1>
	  <h2 style="font-family:Lucida Console">Student Election 2018</h2>
</div>

<br>

<body style="background-color:#B3E5FC" class="login">

<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1 style="font-family:Lucida Console" >Login</h1>
			  <h2 style="font-family:Lucida Console">Use MIS Account Credentials</h2>
			  <br>
			  <br>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" style="margin-left:130px" type="submit" name="submit1" value="Login">
               
            </div>

            <div class="clearfix"></div>

            <div class="separator">
               

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>



<?php
if(isset($_POST['submit1']))
{
                   $username=$_POST['username'];
					$password=$_POST['password'];
					$conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");

					
					$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
					
					$result=mysqli_query($conn,$sql) or die("Your query is not right");
					$count=mysqli_num_rows($result);
					if($count==0)
					{
								?>
							
							<div class="alert alert-danger col-lg-6 col-lg-push-3">
								<strong style="color:white">Invalid</strong> Username Or Password.
							</div>
<?php

						
					}
					else
					{
						$_SESSION['username']=$_POST['username'];
					
						$row=mysqli_fetch_array($result);
						$status=$row['status'];
						//echo $status;
							$_SESSION['name']=$row['Name'];
							$_SESSION['dept']=$row['Department'];
							$_SESSION['hostel']=$row['Hostel'];
							$_SESSION['userId']=$row['id'];
						if($status == 1)
						{
							// Admin Login
							header('Location:admin_options.php');	

						}
						else 
						{
							//Student login
							header('Location:student_vote_options.php');	

							
						}
						



						
					}
					
	

				}	


?>




</body>
</html>
