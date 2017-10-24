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
                                <h2>Modify Student Council</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							
							 <table class="table table-bordered">
							   <tr>
							   <th>
							     Options In Executive Wings (EW)
							   </th>
							    
							   
							   </tr>

								<tr>
								<td><a href="ew_add_post.php" class="btn btn-default submit" style="background-color:blue;color:white" name="add" >Add Posts</a></td>
								
								</tr>
								

								<td><a  href="ew_delete_post.php" class="btn btn-default submit" style="background-color:blue;color:white" name="add" >Delete Posts</a></td>
								
								</tr>

			

							   
                               </table>
							   
							    <table class="table table-bordered">
							   <tr>
							   <th>
							     Options In  Student Affairs Council (SAC)
							   </th>
							    
							   
							   </tr>
							   
								<tr>
								<td><a href="sac_add_posts.php" class="btn btn-default submit" style="background-color:blue;color:white" name="add" >Add Posts</a></td>
								
								</tr>
								
								<tr>
								<td><a href="sac_delete_posts.php" class="btn btn-default submit" style="background-color:blue;color:white" name="add" >Delete Posts</a></td>
								
								</tr>

			

							
                               </table>
							





							
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
