<?php
	require_once("connection.php");
	$query = "select * from category";
	$result = $con->query($query);
	$ccnt = $result->num_rows;
	
	$query = "select * from providers";
	$result = $con->query($query);
	$pcnt = $result->num_rows;
	
	$query = "select * from user";
	$result = $con->query($query);
	$ucnt = $result->num_rows;
	
	$query = "select * from ratting where feedbacktoadmin = '1'";
	$result = $con->query($query);
	$fcnt = $result->num_rows;
?>
<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ccnt;?></strong></h5>
                      <span><a href="category.php" title="View Category">Category</a></span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $pcnt;?></strong></h5>
                      <span><a href="View_all_providers.php" title="View Providers">Providers</a></span>
                    </div>
                </div>
        	</div>
        	<!-- <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php //echo $ucnt;?></strong></h5>
                      <span>Users</span>
                    </div>
                </div>
        	</div>-->
        	<div class="col-md-4 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ucnt;?></strong></h5>
                      <span><a href="view_users.php" title="View Users">Total Users</a></span>
                    </div>
                </div>
        	 </div>
             <div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $fcnt; ?></strong></h5>
                      <span><a href="view_feedback_frm_users.php" title="View Feedback From Users">Feedback From Users</a></span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>