<!---------------------------header and fix sidebar-------------------------->

	<div class="header">
		<div class="coverhead">
			<a href="../pages/index.html" id="logo">
<!--                <img src="../images/logo.png" alt="logo" height="58" width="381">-->
            </a>
			<div class="coverul">

                <?php if (isset($_SESSION['user_name'])) {?>
				<div id="topbar">
  				   <ul>
       					<li><a href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> <?php echo $_SESSION['user_name'];?></a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw "></i>Setting</a></li>
						<li><a href="#"><i class="fa fa-address-book-o fa-fw" aria-hidden="true"></i>Profile</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw fa-lg " aria-hidden="true"></i>Sign Out</a></li>
     				   </ul>

				</div>

                <?php }?>

				<ul class="selful">
					<li   >	<a href="../pages/index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li ><a href="../pages/facilities.php">Facilities</a></li>

					<li><a href="../pages/collegereview.php">College</a></li>
					<li><a href="../pages/timetable.php">Time Table</a></li>
					<li ><a href="../pages/download.php">Downloads</a></li>



				</ul>
			</div>
		</div>
	</div>


