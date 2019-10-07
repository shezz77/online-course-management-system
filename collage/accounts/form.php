
<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=Login first then Enter');
}

?>




 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>D.Com Class Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">

<style>
.sidebar ul{ list-style-type: none;  padding: 0;}
.sidebar ul li{ background:url(../images/bg-body.jpg);;border:1px solid blue;padding: 11px 0 11px 11px;  margin:11px 0;border-radius: 22px 0 0 22px; }
.sidebar ul li:hover{ cursor: auto;border-right-color: white; margin-left: 7px;}
.sidebar ul li a{ color:blue; }
.sidebar ul li a:hover{ color: black; }
#open a{ color:black; }
#open{ margin-left: 9px; border-right-color: white;background:#8ff; }

.insert,.search input,.search button,.sidemenu ul li,.sbutton button{ background: white;padding: 9px 22px; border:1px solid blue;}
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:240px;height:400px;}
.sidemenu ul{  list-style-type: none; }
.sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
#selectedli{ background:#8ff;}
.admincontent{ margin-left: 22px;  width:800px;min-height:  380px; background:#aa2;padding: 14px; border:1px solid blue; border-left:none;border-radius:0 12px 0 0px }




.search input{ width:111px;border-right: none;border-radius:12px 0 0 12px ; }
.search button{ border-left:none;border-radius:0 12px 12px 0 ;}
.insert{ border-radius: 12px; }
.admincontent div{margin:11px 4px;}


.studentlist{clear: both;}

.studentlist table input , .studentlist table select{ background: white;padding:9px 22px; width:141px;border:none;}
.studentlist table  th{ text-align:left;background:#8ff; padding:9px 22px; width:151px; }
.studentlist table td{ background: white; }
.studentlist table td:hover{ background: #8ff; }
.studentlist table th:hover{ background: white; }
.studentlist table input:focus{ outline: none; }


.studentlist table select{   padding:12px 22px;width: 188px;}
.option{  color: blue; }

.sbutton button{ margin: 1px; border-radius:6px;cursor: pointer;  font-weight: bolder;padding:10px 24px;}
.center{ text-align: center;  font-family: sans-serif;font-variant: small-caps; }



</style>

</head>
<body>
<!---------------------------header and fix sidebar-------------------------->

	<div class="header">
		<div class="coverhead">
			<a href="index.html" id="logo"><img src="../images/logo.png" alt="logo" height="58" width="381"></a>
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
					<li id="open"><a href="../datesheet/dspanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Manage Date Sheet</a></li>
					<li><a href="../accounts/accountpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i> Accounts DataBase</a></li>
					<li><a href="../forum/form.php"><i class="fa fa-ellipsis-v fa-fw "></i>Discussion Forum</a></li>
				</ul>




	</div>
	</div>





<div class="marginl" >
		<div class="maintext sans"><hr>
			D.com Date Sheet Database <hr>
		</div>


		<div class="sidemenu fleft">
			<ul>

				<li ><a href="dspanel.php"><i class="fa fa-user-circle fa-fw"></i>Date Sheet Panel</a>    </li>
				<li  id ="selectedli"><a href="dcomdsview.php"><i class="fa fa-pencil fa-fw "></i> D.com Date Sheet</a>    </li>
				<li><a href="bcomdsview.php"><i class="fa fa-book fa-fw"></i> B.com Date Sheet</a>    </li>
				<li ><a href="mcomdsview.php"><i class="fa fa-graduation-cap fa-fw"></i> M.com Date Sheet</a>	</li>
				<li><a href=""><i class="fa fa-ban fa-fw"></i>Old Date Sheet</a>	</li>


			</ul>
		</div>

		<div class="admincontent fleft">
			<div>


					<div class="fleft insert sphover">
								 <a href="dcomform.php"><i class="fa fa-plus-circle fa-fw"></i> Insert New Subject</a>
					</div>
					<div class="fleft insert sphover">
								 <a href="dcomdsview.php"><i class="fa fa-database fa-fw"></i> D.com Date Sheet Database</a>
					</div>


			</div>

			<div class="studentlist">

<?php
// Variables
if(isset($_POST['submit'])){
$User = "root";
$Password = "";
$Database = "fkdatesheet";
$Table = "dcom";
$Host = "localhost";
$sqlDate = date('Y-m-d H:i:s');

		// Connect to the server
		mysql_connect($Host, $User, $Password) or die (mysql_error());
		//Check connectivity
		mysql_select_db($Database) or die(mysql_error());





		$insert = "INSERT INTO $Table (subjects,time,date,place ) 
					  VALUES('$_POST[subjects]','$_POST[time]', '$_POST[date]', '$_POST[place]')";

	if (!mysql_query($insert)){
	die("Error:".mysql_error());
}
else echo "<div class='insert'><center> <p >  Subject Added Successfully  <br>";
	echo "Subject Name is:<strong>";
	echo $_POST['subjects'];
	echo "</strong></p></center></div>";

		mysql_close();
	}

?>


					<div class='insert sphover center'>
						Insert New Dcom Date Sheet Subject
					</div>
			<table>
			<form method="post" action="dcomdsform.php">

			<tr><th>Subject Name</th><td><input type="text" name="subjects" maxlength="30" required/></td>
					<th>Date</th><td><input type="date" name="date" maxlength="30" required/></td></tr>
			<tr><th>Time</th><td><input type="time" name="time"  maxlength="30" required /></td>
				<th>Center Name</th><td><input type="text" name="place"  maxlength="30" required /></td></tr>

			</table>

			<div class="sbutton"><center><button class="sphover" type="submit" name="submit"> Insert </button><button class="sphover" type="reset">Reset</button></center></div>
			</form>
			</div>

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
			<a href="../pages/index.html"><i class="fa fa-home fa-lg "></i></a>
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

<script>
var d = new Date();
document.getElementById("date").value = d.toDateString();
</script>

