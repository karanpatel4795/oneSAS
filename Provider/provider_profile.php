<?php 
	require_once("session.php");
	require_once("connection.php");
	
	$query = "select * from providers where email = '$uname'";
	
	$result = $con->query($query);
	
	if($result->num_rows  > 0)
				{
					while($row = $result->fetch_assoc())
					{
						$fname = $row["firstname"];
						$lname = $row["lastname"];
						$cat = $row["category"];
						$photo = $row["photo"];
					}
				}
	
?>
<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src='../provider/<?php echo $photo; ?>' height="40" width="40" border="2"> </span> 
									<div class="user-name">
										<p><?php echo $fname;?>&nbsp;<?php echo $lname;?> </p>
										<span><?php echo $cat; ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="account_info.php"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>