<?php
	require_once("session.php");
	require_once("connection.php");
	
	$query = "select * from booking where providername = '$uname' and completeorder = 0 and canbyprovider = 0 and canbyuser = 0";
	$result = $con->query($query);
	$bcnt = $result->num_rows;
	
	$query = "select * from booking where providername = '$uname' and completeorder = 1 and canbyprovider = 0 and canbyuser = 0";
	$result = $con->query($query);
	$ccnt = $result->num_rows;
	
	$query = "select * from booking where providername = '$uname'";
	$result = $con->query($query);
	$acnt = $result->num_rows;
	
	$query = "select * from ratting where provider = '$uname'";
	$result = $con->query($query);
	$mcnt = $result->num_rows;
	
?>
<div class="col_3">
        	<div class="col-md-9 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $bcnt;?></strong></h5>
                      <span><b>New Bookings</b></span>
                    </div>
                     <a href="booking.php"><span>View Details</span></a>
                </div>
        	</div>
        	<div class="col-md-9 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ccnt;?></strong></h5>
                      <span><b>Completed Orders</b></span>
                    </div>
                    <a href="completed_order.php"><span>View Details</span></a>
                </div>
        	</div>
        	<div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $acnt;?></strong></h5>
                      <span><b>Total Orders</b></span>
                    </div><a href="total_order.php"><span>View Details</span></a>
                </div>
        	</div>
        	<div class="col-md-4 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $mcnt;?></strong></h5>
                      <span><b>Feedback</b></span>
                    </div><a href="feedback.php"><span>View Details</span></a>
                  </div>
        	 </div>
             
        	
        	<div class="clearfix"> </div>
		</div>
        <br>