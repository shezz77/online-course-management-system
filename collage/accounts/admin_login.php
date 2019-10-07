<?php

session_start();

?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Login Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">

<style>

.sidebar ul{ list-style-type: none;  padding: 0;}
.sidebar ul li{ background:url(../images/bg-body.jpg);;border:1px solid blue;padding: 11px 0 11px 11px;  margin:11px 0;border-radius: 22px 0 0 22px; }
.sidebar ul li:hover{ cursor: auto;border-right-color: white; margin-left: 7px;}
.sidebar ul li a{ color:blue; }
.sidebar ul li a:hover{ color: black; }
#open a{ color:black; }
#open{ margin-left: 9px; border-right-color: white; background:#8ff; }
.select a{color:yellow;}
.headtext{ width:auto;}

.con{
	border: 2px solid black;
	border-top:none;}
form {
	color: #099;
	text-align: center;
}

input[type=text], input[type=password] {
	width: 22%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	text-align: center;
}

#button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 158px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 27%;
}
#button:hover{ background:green;}




.imgcontainer {
    text-align: center;
	padding:6px;
    margin: 0 0 12px  0;
}

img.avatar {
    width: 20%;
    border-radius: 40%;
}

.container {
    padding: 16px;

}



span.psw {
        padding-top: 16px;
		left: 222px;
		}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }

}


</style>

</head>
<body>
<!---------------------------header and fix sidebar-------------------------->

	<div class="header">
		<div class="coverhead">
			<a href="../index.html" id="logo"><img src="../images/logo.png" alt="logo" height="58" width="381"></a>
			<div class="coverul">
				<div id="topbar">
  				   <ul>
  				 	<li><a href="#">FK<sup><i class="fa fa-trademark fa-fw "></i></sup></a></li>
				 	<li><a href="#"><i class="fa fa-address-book-o fa-fw" aria-hidden="true"></i>Contact Us</a></li>
					<li><a href="#"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>Student Login</a></li>
       					<li ><a href="../admin_login.php"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Admin Login</a></li>
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


<div class="hell">
	<div class="headtext marginl sphover">
			Login Form
					</div>
<div class="marginl con">
<form action='admin_login.php' method='POST'>
  <div class="imgcontainer">
    <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username"  name="user_name" required>
<br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="admin_pass" required>
<br>
    <input id="button" type="submit" name="login" value="Login" />
  </div>
<center>
<div id="wrong" style="color:red;font-weight:bold"></div>
<?php if(isset($_GET['error'])){echo $_GET['error']; }?>
</center>
</form>
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
<?php

$con = mysql_connect("localhost","root","");
$db	= mysql_select_db('fk',$con);

if(isset($_POST['login']))
{
	$username = $_SESSION['user_name'] = $_POST['user_name'];
	$password = $_POST['admin_pass'];

$query = "select * from login where user_name='$username' AND user_password='$password'";
$run = mysql_query($query);

if(mysql_num_rows($run)>0)
{
	echo "<script>window.open('accountpanel.php?logged=logged in successfully','_self')</script>";
}
else{
echo "<script>document.getElementById('wrong').innerHTML='".$_POST['user_name']." You have Incorrect user name or password Retry...!';</script>";
}

}



?>

</body>
</html>















