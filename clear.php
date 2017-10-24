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
                                <h2>Clear Election</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form action="" method="post">
							 <table class="table table-bordered">
								<tr>
								<td><input type="submit" class="btn btn-default submit" style="background-color:blue;color:white" name="submit1" value="Clear Election"></td>
								
								</tr>
								</table>
								</form>
								<?php
								
								if(isset($_POST['submit1']))
								{
									// Upadate generate table
									 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
						

							
							  $sql= "UPDATE generate SET status='0' WHERE id='1'";
							  $result=mysqli_query($conn,$sql) or die("Your query is not right");
									?>
							
							<div class="alert alert-danger col-lg-6 col-lg-push-3">
								<strong style="color:white">Election</strong> Status Restart
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
