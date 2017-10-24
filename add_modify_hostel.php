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
                                <h2>Add Hostels to Hostel Council</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" name="form1" method="post" class="col-lg-6" enctype="multipart/form-data"> 
                                <table class="table table-bordered">
								<tr>
								<td><input type="text" class="form-control" placeholder="Add Hostel Name" name="postName" required=""></td>
								</tr>
							
							
         
								<tr>
								<td><input type="submit" class="btn btn-default submit" style="background-color:blue;color:white" name="submit1" value="Add Hostel"></td>
								</tr>
								
								</table>
								</form>
								
					         								
								<?php
								if(isset($_POST['submit1']))
								{
									
								
								 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
						
						        $name=$_POST['postName'];
							
							  $sql= "INSERT INTO Hostels (Name) VALUES('$name')";
							  $result=mysqli_query($conn,$sql) or die("Your query is not right");
							 ?>
					 <div class="alert alert-success col-lg-12 col-lg-push-0">
						Message Send Successfully
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
