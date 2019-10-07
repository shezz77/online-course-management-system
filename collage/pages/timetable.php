<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:../admin/admin_login.php?error=login first then come');
}

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Downloads Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">

<style>






.greenbg table{ width: 80%;margin: 22px auto; }
.greenbg table tr{ background: white;  }
.greenbg table td,th{ padding: 10px;}
.greenbg table a{ float: right;margin:auto 11px; color:green; ;  }
.greenbg table a:hover{ color:blue; }
.greenbg table td:hover,.greenbg table th:hover{ background: #8ff }



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



       					<li><a href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> <?php echo $_SESSION['user_name'];?></a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw "></i>Setting</a></li>
						<li><a href="#"><i class="fa fa-address-book-o fa-fw" aria-hidden="true"></i>Profile</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw fa-lg " aria-hidden="true"></i>Sign Out</a></li>
     				   </ul>

				</div>



				<ul class="selful">
					<li   >	<a href="../pages/index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li ><a href="../pages/facilities.php">Facilities</a></li>

					<li><a href="../pages/collegereview.php">College</a></li>
					<li class="selected"><a href="../pages/timetable.php">Time Table</a></li>
					<li ><a href="../pages/download.php">Downloads</a></li>



				</ul>
			</div>
		</div>
	</div>




<?php

include ("../include/sidebar.html");
?>

<div class="marginl" >
		<div class="maintext sans"><hr>
			All Classes Time Table<hr>
		</div>

		<div class="greenbg sans">

				<table>
					<tr > <th style="border-radius: 12px 12px 0 0;padding: 14px;background: #8ff;" colspan="4">Dcom Session 2016-2018
							<a href="../files/f.docx"><i class="fa fa-download fa-fw"></i>Download in docx</a>
							<a href="../files/f.docx"><i class="fa fa-download fa-fw"></i>Download in Jpg</a>
						</th>
					</tr>
					<tr> <th>Subject Name</th><th>Time </th>       <th>Room</th><th>Teacher Name</th> </tr>
					<tr> <td>Accounting</td>  <td>9:00 to 9:40</td><td>Room 1</td>     <td>M.Ijaz</td>		</tr>
					<tr> <td>Banking</td>  <td>9:40 to 10:20</td><td>Room 2</td>     <td>M.Ismail</td>		</tr>
					<tr> <td>Urdu</td>  <td>10:20 to 11:00</td><td>Room 2</td>     <td>M.Habib</td>		</tr>
					<tr> <td>English</td>  <td>11:00 to 11:40</td><td>Room 3</td>     <td>M.Asghar</td>		</tr>
					<tr> <td>Commerce</td>  <td>11:40 to 12:20</td><td>Room 2</td>     <td>M.Ali</td>		</tr>
					<tr> <td>Information Tech.</td>  <td>12:20 to 13:00</td><td>Lab 1</td>     <td>Fazal Hussain</td>		</tr>
				</table>


				<table>
					<tr > <th style="border-radius: 12px 12px 0 0;padding: 14px;background: #8ff;" colspan="4">Bcom  Session 2016-2018
							<a href="../files/f.docx"><i class="fa fa-download fa-fw"></i>Download in docx</a>
							<a href="../files/f.docx"><i class="fa fa-download fa-fw"></i>Download in Jpg</a>
						</th>
					</tr>
					<tr> <th>Subject Name</th><th>Time </th>       <th>Room</th><th>Teacher Name</th> </tr>
					<tr> <td>Accounting</td>  <td>9:00 to 9:40</td><td>Room 4</td>     <td>Sir Fk</td>		</tr>
					<tr> <td>Auditing</td>  <td>9:40 to 10:20</td><td>Room 4</td>     <td>Mam Khawar</td>		</tr>
					<tr> <td>Economics</td>  <td>10:20 to 11:00</td><td>Room 5</td>     <td>Madam Shamim</td>		</tr>
					<tr> <td>English</td>  <td>11:00 to 11:40</td><td>Room 5</td>     <td>Mam Farwa</td>		</tr>
					<tr> <td>Intro to Business</td>  <td>11:40 to 12:20</td><td>Room 4</td>     <td>Mansab Muneer</td>		</tr>
					<tr> <td>Islamiat</td>  <td>12:20 to 13:00</td><td>Lab 2</td>     <td>Mam Saboora</td>		</tr>
				</table>



					<table>
					<tr > <th style="border-radius: 12px 12px 0 0;padding: 14px;background: #8ff;" colspan="4">Mcom Session 2016-2018
							<a href="../files/f.docx"><i class="fa fa-download fa-fw"></i>Download in docx</a>
							<a href="../files/f.docx"><i class="fa fa-download fa-fw"></i>Download in Jpg</a>
						</th>
					</tr>
					<tr> <th>Subject Name</th><th>Time </th>       <th>Room</th><th>Teacher Name</th> </tr>
					<tr> <td>Accounting</td>  <td>9:00 to 9:40</td><td>Room 6</td>     <td>Sir Ali</td>		</tr>
					<tr> <td>Cost</td>  <td>9:40 to 10:20</td><td>Room 6</td>     <td>Sir Fayyaz</td>		</tr>
					<tr> <td>Commerce</td>  <td>10:20 to 11:00</td><td>Room 7</td>     <td>Mam Farwa</td>		</tr>
					<tr> <td>Applied Accounting</td>  <td>11:00 to 11:40</td><td>Room 7</td>     <td>Kashif Saeed</td>		</tr>

				</table>










				</table>


		</div>




</div>




<?php
include ("../include/footer.html");

?>
</body>
</html>