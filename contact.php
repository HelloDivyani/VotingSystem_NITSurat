<?php
session_start();
$username=$_SESSION['username'];
//echo $username;
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
                                <h2>Send Message</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <form acton="" name="form1" method="post" class="col-lg-6" enctype="multipart/form-data"> 
                                <table class="table table-bordered">
								<tr>
								<td><input type="text" class="form-control" placeholder="Title of Message" name="title" required=""></td>
								</tr>
								<tr>
							
            <textarea   class="form-control" placeholder="Type your Message Here...." tabindex="5" name='msg' autofocus required></textarea>
    </tr>
								<tr>
								<td><input type="submit" class="btn btn-default submit" style="background-color:blue;color:white" name="submit1" value="Send Message"></td>
								</tr>
								
								</table>
								</form>
								
								
								<?php
								if(isset($_POST['submit1']))
								{
									
								
								 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
						
						        $title=$_POST['title'];
								$msg=$_POST['msg'];
								
							  $sql= "INSERT INTO message (title,msg,username) VALUES('$title','$msg','$username')";
							  $result=mysqli_query($conn,$sql) or die("Your query is not right");
							 ?>
					 <div class="alert alert-success col-lg-12 col-lg-push-0">
						Message Send Successfully
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
