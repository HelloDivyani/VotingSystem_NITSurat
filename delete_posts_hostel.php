<?php

include "admin_header.php";
?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Delete Posts from Hostel Council</h3>
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
                                <h2>Click Hostel to Delete It !!</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               
							    <table class="table table-bordered">
							  
							   <?php
							    $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
								  $sql= "SELECT * FROM postshostel";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
							     
								while($row=mysqli_fetch_array($result))
								{
								echo "<tr>";
								echo "<td>"; ?> <a href="delete1.php?id=<?php echo $row['id'] ?>&data=postshostel"> <?php echo $row['Name']?> </a> <?php  echo"</td>";
								
								echo "</tr>";
								}
								
								echo "</table>";   
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
