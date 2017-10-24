<?php

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
                                <h2>Add Candidate Info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               
							   <form acton="" name="form1" method="post" class="col-lg-6" enctype="multipart/form-data"> 
							     <table class="table table-bordered">
								<tr>
								<td><input type="text" class="form-control" placeholder="Admission Number" name="addno" required=""></td>
								</tr>
								<tr>
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Name" name="name" required=""></td>
								</tr>
								
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Year in Integer" name="year" required=""></td>
								</tr>
								
								<td>Image<input type="file" name="fi" required=""></td>
								</tr>
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Department" name="dept" required=""></td>
								</tr>
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Degree" name="degree" required=""></td>
								</tr>
								<tr>
								  <textarea   class="form-control" placeholder="Achievements...." tabindex="5" name='ach' autofocus required></textarea>
  
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="Election Type" name="etype" required=""></td>
								</tr>
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Election Post" name="epost" required=""></td>
								</tr>
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Candidate Hostel" name="hostel" required=""></td>
								</tr>
								
								<tr>
								<td><input type="text" class="form-control" placeholder="Post Id" name="fid" required=""></td>
								</tr>
								
								<tr>
								<td><input type="submit" class="btn btn-default submit" style="background-color:blue;color:white" name="submit1" value="Add Candidate"></td>
								</tr>
								
								
								
								
								
								</table>
								</form>
							   <?php 
							    if(isset($_POST['submit1']))
								{
									$addno=$_POST['addno'];
									$image='images/pic.png';
									$name=$_POST['name'];
									$year=$_POST['year'];
									$etype=$_POST['etype'];
									$epost=$_POST['epost'];
									$fid=$_POST['fid'];
									$hostel=$_POST['hostel'];
									$ach=$_POST['ach'];
									$degree=$_POST['degree'];
									$dept=$_POST['dept'];
									
									
									// $tm=md5(time()); //unique name of all files
									  //$fnm=$_FILES['fi']['name'];
									  //$dat="./books_image/".$tm.$fnm;
										//$dat1="books_image\".$tm.$fnm;
										//move_uploaded_file($_FILES['fi']['tmp_name'],$dat);
										
										
										//insert
										
										$conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
						
						      
							
							  $sql= "INSERT INTO candidates(Admission_Number,Name,Year,Department,Degree,Achievements,etype,epost,Hostel,fid,Votes) VALUES('$addno','$name','$year','$dept','$degree','$ach','$etype','$epost','$hostel','$fid','0')";
							  $result=mysqli_query($conn,$sql) or die("Your query is not right");
									
							 ?>
					 <div class="alert alert-success col-lg-12 col-lg-push-0">
					   Added Candidate Successfully
					</div>
					
					<?php
							 //header("Location:modify_student.php");	
							 
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
