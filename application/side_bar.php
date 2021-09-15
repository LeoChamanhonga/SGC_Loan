<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
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
          <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row ['username'] ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		  <?php }}?>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> <span>Dashbord</span></a></li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Email Templates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newemail.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Email</a></li>
            <li><a href="listemail.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Email</a></li>
          </ul>
        </li>  
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Borrowers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newborrowers.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Borrowers</a></li>
            <li><a href="listborrowers.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Borrowers</a></li>
          </ul>
        </li>  
		
	<li><a href="mywallet.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-book"></i> <span>My Wallet</span></a></li>

		<li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Loans</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newloans.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Loans</a></li>
            <li><a href="listloans.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Loans</a></li>
          </ul>
        </li>  
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Message</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newmessage.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Message</a></li>
            <li><a href="inboxmessage.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Inbox Message</a></li>
            <li><a href="outboxmessage.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Outbox Message</a></li>
          </ul>
        </li>  
		
		<li><a href="missedpayment.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dollar"></i> <span>Missed Payment</span></a></li>		
				
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Payments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newpayments.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Payment</a></li>
            <li><a href="listpayment.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Payments</a></li>
          </ul>
        </li>  
		
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Employee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
 			<li class="active"><a href="newemployee.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i> New Employee</a></li>
            <li><a href="listemployee.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>List Employee</a></li>
          </ul>
        </li>  
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Module Permission</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
		  	<li><a href="emp_role.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Employee Role</a></li>
			<li><a href="permission_list.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Permission List</a></li>
			<li><a href="add_permission.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Add Permission</a></li>
          </ul>
        </li>
		
		<li><a href="savings.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-money"></i> <span>Savings Account</span></a></li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>General Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
		  	<li><a href="system_set.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>System Configuration</a></li>
			<li><a href="sms.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>SMS Gateway Settings</a></li>
			<li><a href="backupdatabase.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-circle-o"></i>Backup Database</a></li>
          </ul>
        </li>
		
		<li>
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
		

    </section>
    <!-- /.sidebar -->
  </aside>