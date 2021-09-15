 <header class="main-header">
    <!-- Logo -->
   <a href="application/index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php echo $row ['abb'];?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $row ['name'];?></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		
		
		
		
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                 
                  
                  
                </ul>
              </li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    
                  </li>
                  <!-- end task item -->
                  
                  <!-- end task item -->
                  
                  <!-- end task item -->
                  
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#"></a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<?php 
			$id = $_SESSION['tid'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('Data Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			?>
              <img src="../<?php echo $row['image'];?>" class="user-image" alt="User Image">

          <span class="hidden-xs"><?php echo $row ['name'] ;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo 'Username:'. $row ['username'];?>
                </p>
					<?php }}?>
                  </li>
			  
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
				 
                    <a href="profile.php?id=<?php echo $_SESSION['tid']; ?>">Profile</a>
					
                  </div>
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Borrower Details'") or die ("Error" . mysqli_error($link));
while($get_check = mysqli_fetch_array($check)){
$pread = $get_check['pread'];
?>
                <?php echo ($pread == 1) ? '<div class="col-xs-4 text-center"><a href="listborrowers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'">Borrowers</a></div>' : ''; ?>
<?php } ?>
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
while($get_check = mysqli_fetch_array($check)){
$pread = $get_check['pread'];
?>
                <?php echo ($pread == 1) ? '<div class="col-xs-4 text-center"><a href="inboxmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'">Mailbox</a></div>' : ''; ?>
<?php } ?>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Internal Message'") or die ("Error" . mysqli_error($link));
while($get_check = mysqli_fetch_array($check)){
$pcreate = $get_check['pcreate'];
?>
                <?php echo ($pcreate == 1) ? '<div class="pull-left"><a href="newmessage.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("406").'" class="btn btn-info btn-flat">New Message</a></div>' : ''; ?>
<?php } ?>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>