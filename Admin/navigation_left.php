<?php
	require_once("connection.php");
	$query = "select * from category";
	$result = $con->query($query);
	
	$ccnt = $result->num_rows;
?>
<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
         
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">One Site Any Service</li>
              <li class="treeview">
                <a href="home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Profile</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="Change_password_admin.php"><i class="fa fa-angle-right"></i> Change Password</a></li>
                  <li><a href="change_sec_que_admin.php"><i class="fa fa-angle-right"></i> Update Recovery Question</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="category.php">
                <i class="fa fa-pie-chart"></i>
                <span>Category</span>
                <small class="label pull-right label-info"><?php echo $ccnt;?></small>
                </a>
                 <ul class="treeview-menu">
                  <li><a href="add_cat.php"><i class="fa fa-angle-right"></i> Add Category</a></li>
                  <li><a href="category.php"><i class="fa fa-angle-right"></i> View Category</a></li>
                </ul>
              </li>
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Provider</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="searchpro_by_cat.php"><i class="fa fa-angle-right"></i> Search by Category</a></li>
                  <li><a href="searchpro_by_name.php"><i class="fa fa-angle-right"></i> Search by Name</a></li>
                </ul>
              </li>
			 <!-- <li>
                <a href="widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <small class="label pull-right label-info">08</small>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
                  <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                  <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                  <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                  <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                  <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                </ul>
              </li>
              <li class="header">LABELS</li>
              <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>