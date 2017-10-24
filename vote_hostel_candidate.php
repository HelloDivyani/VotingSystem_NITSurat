<?php
session_start();
//session_start();
$userId=$_SESSION['userId'];
error_reporting(0);


$dept=$_SESSION['dept'];
//error_reporting(0);
$id=$_GET['id']; //post id
$data=$_GET['data']; //etype
//echo $id.$data;
$post=$_GET['post']; //post name
$hostel=$_GET['hostel']; //userHostel
include "header.php";
?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                   
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Candiates for <?php echo $post?></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php 
							
							 // Candidates Display 
							   
							   $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
							 //echo $data.$id;
							 //Check in voteLock
							// echo $userId.$id.$data;
							 $sql="SELECT * FROM votelock WHERE user_id='$userId' AND post_id='$id' AND etype='$data'";
							  $result=mysqli_query($conn,$sql) or die("Your query is not right");
							   $count=mysqli_num_rows($result);
							  // echo "Count".$count;
							   if($count>0)
							   {
								   echo "<h1>Thanks You Already Voted For It !!!</h1>"; 
								   
							   }
							   else
							   {
							
							
							     //echo "Here";
							
							
							
							   $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
							 //echo $data.$id;
							// echo $hostel;
						
							 $sql= "SELECT * FROM candidates WHERE etype='$data' AND fid='$id' AND Hostel='$hostel'";
							 $result=mysqli_query($conn,$sql) or die("Your query is not right");
							 
							 $count=mysqli_num_rows($result);
							 if($count==0)
							 {
								 echo "<h1>No Candiates for this Post</h1>";
							 }
							 else
							 {
								 echo "<table class='table table-bordered'>";
								echo "<tr>";
								echo "<th>";echo "Name"; echo "</th>";
							
								echo "<th>";echo "Admission Number"; echo "</th>";
								echo "<th>";echo "Image"; echo "</th>";
									echo "<th>";echo "VOTE"; echo "</th>";
								 echo "</tr>";
								
								while($row=mysqli_fetch_array($result))
								{
								echo "<tr>";
								echo "<td>";echo $row['Name']; echo "</td>";
								echo "<td>";echo $row['Admission_Number']; echo "</td>";
								echo "<td>"; ?>  <img src="images\pic.png" alt="pic" width="100" height="100"/><?php echo "</td>";
								echo "<td>"; ?> <a href="vote_hostel_final.php?id=<?php echo $row['id']?>&type=<?php echo $data?>&fid=<?php echo $id?>&postName=<?php echo $post ?>" >VOTE</a><?php  echo "</td>";
								
								echo "</tr>";
								}
								echo "</table>";
			 
							  
							 }
							 
							   }
							?>
							
                              


  							  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		
		
		
<?php

include "footer.php";
?>


       
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>
