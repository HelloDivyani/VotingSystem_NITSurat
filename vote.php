
<?php
include "header.php";
session_start();
$userId=$_SESSION['userId'];
error_reporting(0);
$id=$_GET['id'];
$type=$_GET['type'];
//echo $id;
$postName=$_GET['postName'];
$fid=$_GET['fid'];
 $conn=mysqli_connect("localhost","root","root","voting") or die("The connection to the database has not been made");
 $sql="UPDATE candidates SET Votes=Votes+1 WHERE id='$id'";
 $result=mysqli_query($conn,$sql) or die("Your query is not right");
// Lock this post

$sql="INSERT INTO voteLock(user_id,post_id,etype) VALUES('$userId','$fid','$type')";
 $result=mysqli_query($conn,$sql) or die("Your query is not right");

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
                                <h2>Success</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <a href="vote_student_candidate.php?id=<?php echo $fid ?>&data=<?php echo $type?>&post=<?php echo $postName?>">Voted Successfully</a>
 
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
