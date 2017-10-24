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
                                <h2>Delete Posts from Executive Wings (EW)</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <table class="table table-bordered">
							   <tr>
							   <th>
							     Click the Post to Delete It !!
							   </th>
							    
							   
							   </tr>
							  
							   <?php
							    $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
								  $sql= "SELECT * FROM postsew";
								   $result=mysqli_query($conn,$sql) or die("Your query is not right");
							     //$sql= "SELECT * FROM postssac";
							   // $result1=mysqli_query($conn,$sql) or die("Your query is not right");
								while($row=mysqli_fetch_array($result))
								{
								echo "<tr>";
								echo "<td>"; ?> <a href="delete.php?id=<?php echo $row['id']?>&data=postsew"> <?php echo $row['Name']?> </a> <?php  echo"</td>";
								
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
