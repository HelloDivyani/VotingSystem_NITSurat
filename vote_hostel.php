<?php
session_start();
$userhostel=$_SESSION['hostel'];
//echo $userhostel;
error_reporting(0);
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
                                <h2>Choose the Post for Voting</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php 
							 // Allowed to vote check generate
							  $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
								  $sql= "SELECT * FROM generate";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
							     $row=mysqli_fetch_array($result);
								 $st=$row['status'];
								 
								 if($st==1)
								 {
									 echo "<h1>Elections Over !!!<?h1>";
								 }
								 else
								 {
									 
							
							?>
							
							<?php
							  // First Check if User is MTB or Gajjar
							   if($userhostel=="Mother Teresa Bhavan" || $userhostel=="Gajjar Bhavan")
							   {
								 ?>
									 <table class="table table-bordered">
									 
							  
							   <?php
							    $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
								  $sql= "SELECT * FROM postshostel";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
							     
								 //id- post id 
								while($row=mysqli_fetch_array($result))
								{
								echo "<tr>";
								echo "<td>"; ?> <a href="vote_hostel_candidate.php?id=<?php echo $row['id'] ?>&data=postshostel&post=<?php echo $row['Name']?>&hostel=<?php echo $userhostel?>"> <?php echo $row['Name']?> </a> <?php  echo"</td>";
								
								echo "</tr>";
								}
								
								echo "</table>";   
							   ?>
								<?php
							   }	
							   else
							   {
								   echo "<h1>Soory You Cannot Vote for this Category !!!</h1>";
							   }
							   
							 
							?>
							 
							<?php 
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
