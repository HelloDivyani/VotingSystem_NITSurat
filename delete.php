<?php
$id=$_GET['id'];
$etype=$_GET['data'];
	 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");

	//$name=$_POST['postName'];

  $sql= "DELETE FROM $etype WHERE id='$id'";
  $result=mysqli_query($conn,$sql) or die("Your query is not right");
  
	  
header("Location:modify_student.php");
  
?>
