<?php
session_start();
$dept=$_SESSION['dept'];
error_reporting(0);
$id=$_GET['id'];
$data=$_GET['data'];
//echo $id.$data;
$post=$_GET['post'];
include "admin_header.php";
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
                                <h2>View Candiates for <?php echo $post?></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php 
							   $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
							 //echo $data.$id;
							 $sql= "SELECT * FROM candidates WHERE etype='$data' AND fid='$id'";
							 $result=mysqli_query($conn,$sql) or die("Your query is not right");
							 
							 $count=mysqli_num_rows($result);
							 if($count==0)
							 {
								 echo "<h1>No Candiates for this Post";
							 }
							 else
							 {
								 echo "<table class='table table-bordered'>";
								echo "<tr>";
								echo "<th>";echo "Name"; echo "</th>";
								echo "<th>";echo "Admission Number"; echo "</th>";
								echo "<th>";echo "Image"; echo "</th>";
								echo "<th>";echo "Year"; echo "</th>";
								echo "<th>";echo "Department"; echo "</th>";
								echo "<th>";echo "Acheivements"; echo "</th>";
								 echo "</tr>";
								
								while($row=mysqli_fetch_array($result))
								{
								echo "<tr>";
								echo "<td>";echo $row['Name']; echo "</td>";
								echo "<td>";echo $row['Admission_Number']; echo "</td>";
								echo "<td>"; ?>  <img src="images\pic.png" alt="pic" width="100" height="100"/><?php echo "</td>";
								echo "<td>";echo $row['Year']; echo "</td>";
								echo "<td>";echo $row['Department']; echo "</td>";
								echo "<td>";echo $row['Achievements']; echo "</td>";
								
								echo "</tr>";
								}
								echo "</table>";
			 
							  
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
