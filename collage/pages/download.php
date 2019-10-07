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

.fright{ float: right; }
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 12px 0 0px ;padding:4px;padding-right:0;background:#aa2;width:80%;height:400px; font-variant: small-caps;font-family: sans-serif;}
.sidemenu ul{ list-style-type: none; }
.sidemenu ul li{border:1px solid blue;border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0;  ;padding:9px 0 9px 22px; background: white;}
.sidemenu ul li a{ background:#4285F4 ;padding:7px 22px;color: white;  }
.sidemenu ul li a:hover{ background:grey ;color: gold }
#selectedli{ background:#8ff; }
.admincontent{ margin-left: 422px; }



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
					<li   >	<a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li><a href="facilities.html">Facilities</a></li>

					<li><a href="collegereview.html">College</a></li>
					<li><a href="timetable.html">Time Table</a></li>
					<li class="selected"><a href="download.html">Downloads</a></li>



				</ul>
			</div>
		</div>
	</div>

<?php

include("../include/sidebar.html");

?>






<div class="marginl" >
		<div class="maintext"><hr>
			Downloads<hr>
		</div>


		<div class="sidemenu fleft">
			<ul>
				<li><i class="fa fa-book fa-fw"></i>Prospectus
								<a class="fright" href="../files/f.docx"><i class="fa fa-download fa-fw"></i> Download</a>
			   </li>
			   <li><i class="fa fa-book fa-fw"></i>Fee Structure
								<a class="fright" href="../files/f.docx"><i class="fa fa-download fa-fw"></i> Download</a>
			   </li>
			   <li><i class="fa fa-book fa-fw"></i>Addmission Form
								<a class="fright" href="../files/f.docx"><i class="fa fa-download fa-fw"></i> Download</a>
			   </li>
			   <li><i class="fa fa-book fa-fw"></i>Leave Application Form
								<a class="fright" href="../files/f.docx"><i class="fa fa-download fa-fw"></i> Download</a>
			   </li>
			   <li><i class="fa fa-book fa-fw"></i>New Vacant Application Form - Adver Expiry Date:22-01-2017
								<a class="fright" href="../files/f.docx"><i class="fa fa-download fa-fw"></i> Download</a>
			   </li>

			</ul>
		</div>




</div>




<?php

include("../include/footer.html");
?>

</body>
</html>