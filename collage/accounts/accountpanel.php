<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=login first then come');
}

?>




 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title> Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">

<style>
.sidebar ul{ list-style-type: none;  padding: 0;}
.sidebar ul li{ background:url(../images/bg-body.jpg);;border:1px solid blue;padding: 11px 0 11px 11px;  margin:11px 0;border-radius: 22px 0 0 22px; }
.sidebar ul li:hover{ cursor: auto;border-right-color: white; margin-left: 7px;}
.sidebar ul li a{ color:blue; }
.sidebar ul li a:hover{ color: black; }
#open a{ color:black; }
#open{ margin-left: 9px; border-right-color: white; background:#8ff;}
.insert,.search input,.search button,.sidemenu ul li{ background: white;padding: 9px 22px; border:1px solid blue;}
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:240px;height:400px;}
.sidemenu ul{  list-style-type: none; }
.sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
#selectedli{ background:#8ff;}
.admincontent{ margin-left: 22px;  width:930px;min-height:  380px; background:#aa2;padding: 14px; border:1px solid blue; border-left:none;border-radius:0 12px 0 0px }


.search input{ width:111px;border-right: none;border-radius:12px 0 0 12px ; }
.search button{ border-left:none;border-radius:0 12px 12px 0 ;}
.insert{ border-radius: 12px; }
.admincontent div{margin:11px 4px;}


.studentlist{clear: both; font-family: sans-serif;}


.titlelist ul{list-style-type: none; display: inline; border-radius: 12px 12px 0 0;}
.titlelist ul li{ float:left; background: white;width:140px; padding: 9px 8px; border:1px solid blue;border-right: none;border-bottom:none;}
.titlelist ul li:first-child{ width:50px;border-radius: 12px 0 0 0; }
.titlelist ul li:last-child{ border-radius:0 12px 0 0 ;border-right:1px solid blue; }


.detaillist ul{ list-style-type: none;display:inline;  font-size:small;}
.detaillist ul li:hover{ background: #8ff; }
.detaillist ul li{ float: left;background: white;width:140px;max-width: 150px ;padding: 9px 8px;border-left:1px solid blue; margin-bottom: 3px;}
.detaillist ul li:first-child{width:50px;clear: both; }
.detaillist ul li:last-child{border-right: 1px solid blue;}


</style>

</head>
<body>
<!---------------------------header and fix sidebar-------------------------->

	<div class="header">
		<div class="coverhead">
			<a href="../pages/index.html" id="logo"><img src="../images/logo.png" alt="logo" height="58" width="381"></a>
			<div class="coverul">
				<div id="topbar">
  				   <ul>



       					<li ><a href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> <?php echo $_SESSION['user_name'];?></a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw "></i>Setting</a></li>
						<li><a href="#"><i class="fa fa-address-book-o fa-fw" aria-hidden="true"></i>Profile</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw fa-lg " aria-hidden="true"></i>Sign Out</a></li>
     				   </ul>

				</div>



				<ul class="selful">
					<li  >	<a href="../pages/index.html"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li><a href="../pages/facilities.html">Facilities</a></li>

					<li><a href="../pages/collegereview.html">College</a></li>
					<li><a href="../pages/timetable.html">Time Table</a></li>
					<li><a href="../pages/download.html">Downloads</a></li>



				</ul>
			</div>
		</div>
	</div>

<div class="sidebar">


				<ul >

					<li><a href="../admin/adminpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Student Data Base</a></li>
					<li ><a href="../managment/managmentpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i></i>Staff Data Base</a></li>
					<li><a href="../fee/feepanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Fee Data Base</a></li>
					<li ><a href="../datesheet/dspanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Manage Date Sheet</a></li>
					<li id="open"><a href="../accounts/accountpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i> Accounts DataBase</a></li>
					<li><a href="../forum/form.php"><i class="fa fa-ellipsis-v fa-fw "></i>Discussion Forum</a></li>
				</ul>




	</div>
	</div>





<div class="marginl" >
		<div class="maintext"><hr>
			All user accounts <hr>
		</div>


		<div class="admincontent " style="margin: auto;">
			<div>


					<div class="fleft insert sphover">
								 <a href="../forum/form.php"><i class="fa fa-plus-circle fa-fw"></i> Visit form</a>
					</div>

					<?php



					if(isset($_GET['updated'])){
					echo "<div class='fleft insert sphover'><i class='fa fa-check fa-fw fa-lg'></i>
							".$_GET['updated']."
					</div>";
					}

					?>

					<?php



					if(isset($_GET['deleted'])){
					echo "<div class='fleft insert sphover'><i class='fa fa-check fa-fw'></i>
							".$_GET['deleted']."
					</div>";
					}

					?>




			</div>
<center>
			<div class="studentlist">
							<div class="titlelist">
								<ul>
									<li>Sr.no</li>
									<li>User Name</li>
									<li>Password</li>
									<li>Email </li>
									<li> Gender</li>
									<li> Modify</li>
								</ul>

							</div>






<?php

$dbname = "forum";
$username = "root";
$password = "";
$servername = "localhost";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$i=1;

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {	$del=$row["uid"]; $edit=$row["uid"];


         echo " <div class='detaillist'>

								<ul >
									<li>".$i."</li>
									<li>". $row["user"] ."</li>
									<li>". $row["password"]  ."</li>
									<li>". $row["Email"]  ."</li>
									<li>". $row["Gender"]  ."</li>

									<li>
										
										<a href='accdelete.php?del=$del'><i class='fa fa-remove fa-lg fa-fw'> </i>Remove</a>
										
									</li>
								</ul>

					</div>
				";
				$i++;


     									}

							} else {
   										  echo "<p>0 results</p>";
									}

$conn->close();

?>



			</div>
</center>

		</div>


</div>


<!-------------footer----------------->

<div class="footer">

	<div class="foot1">
		<img src="../images/worldmap.png" alt=""  >
         	 <a href="#">Find School With Google Maps &raquo;</a>


	</div>

	<div class="foot2">

		<p>Stay Update with us</p>
		<ul class="faico clear">
        	  <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        	  <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        	  <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        	  <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
        	  <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        	</ul>


	</div>
	<div class="foot3">

			<a class="f31" href="#">Administr</a>
			<a class="f32" href="#">Help Desk</a>
			<a class="f33" href="#">Feedback</a>
			<a class="f34" href="#">Complaints</a>


	</div>
	<div class="foot4">
		<div class="f41">
			<a href="index.html"><i class="fa fa-home fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-info-circle fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-address-book-o fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-sign-out fa-lg "></i></a>
		</div>
		<div class="f42">
			<br>
			<i class="fa fa-envelope fa-fw"></i>realx4rd@gmail.com<br><br>
			<i class="fa fa-phone fa-fw"></i>0346-6882215

		</div>
	</div>


</div>


</body>
</html>
