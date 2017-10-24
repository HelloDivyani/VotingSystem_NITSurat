<?php

include "admin_header.php";
?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Generate Result</h3>
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
                                <h2>Generating Results Ends the Election for all Posts</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form action="" method="post">
							 <table class="table table-bordered">
								<tr>
								<td><input type="submit" class="btn btn-default submit" style="background-color:blue;color:white" name="submit1" value="Generate Result of Election"></td>
								
								</tr>
								</table>
								</form>
								<?php
								
								if(isset($_POST['submit1']))
								{
									// Upadate generate table
									 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
						
						        // echo "Here";
							
							  $sql= "UPDATE generate SET status='1' WHERE id='1'";
							  $result=mysqli_query($conn,$sql) or die("Your query is not right");
									
									
									// Compute Result
									// in ew all posts
									 $sql= "SELECT * FROM postsew ";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
								   //All post of ew
								   // Equal Votes Case leave
								   while($row=mysqli_fetch_array($result))
								{
									$pid=$row['id'];
									//echo $pid;
									 $sql1= "SELECT Admission_Number,Name FROM candidates WHERE etype='postsew' AND fid='$pid' HAVING MAX(Votes)";
									$result1=mysqli_query($conn,$sql1) or die("Your query is not right");
									
									//echo $pid.$row1['Name'];
									$c=mysqli_num_rows($result1);
									if($c==0)
									{
									   //	$sql2="UPDATE postsew SET 
									}
									else
									{
									$row1=mysqli_fetch_array($result1);
									$name1=$row1['Name'];
									$add1=$row1['Admission_Number'];
									
									$sql2="UPDATE postsew SET cname='$name1',caddno='$add1',status='1' WHERE id='$pid'";
									  $result2=mysqli_query($conn,$sql2) or die("Your query is not right");
									}
								}
									//All postssac
									
									
									 $sql= "SELECT * FROM postssac ";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
								   //All post of sac
								   // Equal Votes Case leave
								   while($row=mysqli_fetch_array($result))
								{
									$pid=$row['id'];
									//echo $pid;
									 $sql1= "SELECT Admission_Number,Name FROM candidates WHERE etype='postssac' AND fid='$pid' HAVING MAX(Votes)";
									$result1=mysqli_query($conn,$sql1) or die("Your query is not right");
									
									//echo $pid.$row1['Name'];
									$c=mysqli_num_rows($result1);
									if($c==0)
									{
									   //	$sql2="UPDATE postsew SET 
									}
									else
									{
									$row1=mysqli_fetch_array($result1);
									$name1=$row1['Name'];
									$add1=$row1['Admission_Number'];
									
									$sql2="UPDATE postssac SET cname='$name1',caddno='$add1',status='1' WHERE id='$pid'";
									  $result2=mysqli_query($conn,$sql2) or die("Your query is not right");
									}								
															
								}
									
									
									// Hostel Election
									
									 $sql= "SELECT * FROM postshostel ";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
								   //All post of ew
								   // Equal Votes Case leave
								   while($row=mysqli_fetch_array($result))
								{
									$pid=$row['id'];
									//echo $pid;
									 $sql1= "SELECT Admission_Number,Name FROM candidates WHERE etype='postshostel' AND fid='$pid' HAVING MAX(Votes)";
									$result1=mysqli_query($conn,$sql1) or die("Your query is not right");
									
									//echo $pid.$row1['Name'];
									$c=mysqli_num_rows($result1);
									if($c==0)
									{
									   //	$sql2="UPDATE postsew SET 
									}
									else
									{
									$row1=mysqli_fetch_array($result1);
									$name1=$row1['Name'];
									$add1=$row1['Admission_Number'];
									
									$sql2="UPDATE postshostel SET cname='$name1',caddno='$add1',status='1' WHERE id='$pid'";
									  $result2=mysqli_query($conn,$sql2) or die("Your query is not right");
									}
								}
															
										?>
							
							<div class="alert alert-danger col-lg-6 col-lg-push-3">
								<strong style="color:white">Generated</strong> Result !!!
							</div>
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
