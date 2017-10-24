<?php

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
                                <h2>Results Generated</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               
							   <?php 
							    // Check Result Genratus
								 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
								  $sql= "SELECT * FROM generate";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
							     $row=mysqli_fetch_array($result);
								 $st=$row['status'];
								 if($st==0)
								 {
									 echo "<h1>Result Not Generated !!";
								 }
								 else
								 {
									    ?>
							   <table class="table table-bordered">
							   <tr>
							   <th> <a href="ew1.php">Student Council Executive Wings (EW)</a></th>
							   </tr>
							     <tr>
							   <th><a href="sac1.php"> Student Council  Student Affairs Council (SAC)</a></th>
							   </tr>
							     <tr>
							   <th><a href="hos1.php"> Hostel Council</a></th>
							   </tr>
							   </table>
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
