<?php
	require_once("session.php");
?>
<div class="profile_details">		
    <ul>
        <li class="dropdown profile_details_drop">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img">	
                    <span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
                    <div class="user-name">
                        <p><?php echo $uname;?></p>
                        <span>Administrator</span>
                    </div>
                    <i class="fa fa-angle-down lnr"></i>
                    <i class="fa fa-angle-up lnr"></i>
                    <div class="clearfix"></div>	
                </div>	
            </a>
            <ul class="dropdown-menu drp-mnu">
                
                <li> <a href="account_info.php"><i class="fa fa-user"></i> My Account </a> </li>  
                <!-- <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li> -->
            </ul>
        </li>
    </ul>
</div>