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
	<title>D.Com Class Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">	

<style>
.insert,.search input,.search button,.sidemenu ul li{ background: white;padding: 9px 22px; border:1px solid blue;}
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:220px;height:400px;}
.sidemenu ul{  list-style-type: none; }
.sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
#selectedli{ background:BlanchedAlmond; }
.admincontent{ margin-left: 22px;  width:800px;  background:#aa2;padding: 14px; border:1px solid blue; border-left:none;border-radius:0 12px 0 0px }


.search input{ width:111px;border-right: none;border-radius:12px 0 0 12px ; }
.search button{ border-left:none;border-radius:0 12px 12px 0 ;}
.insert{ border-radius: 12px; }
.admincontent div{margin:11px 4px;}


.studentlist{clear: both;}

.studentlist table td{ background: white;padding:9px 22px; width:141px;}
.studentlist table  th{ background:#8ff; padding:9px 22px; width:151px; }

.studentlist table td:hover{ background: #8ff; }
.studentlist table th:hover{ background: white; }






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
					<li >	<a href="../index.html"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li><a href="#">Managment</a></li>
					
					<li><a href="#">Admission</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Downloads</a></li>
				
				
					
				</ul>
			</div>
		</div>
	</div>

<div class="sidebar">	


				<ul class="sideul">
					<li><a href=""><i class="fa fa-info-circle fa-fw"></i>Classes</a></li>
					<li><a href="">Results</a></li>
					<li><a href="#"><i class="fa fa-ellipsis-v fa-fw "></i>Head Office</a></li>
					<li><a href="#">Public Holiday</a></li>
					<li><a href="#">Results</a></li>
					<li><a href="#">I am fk</a></li>
				</ul>



	</div>
	</div>

	
	


<div class="marginl" >
		<div class="maintext"><hr>
			D.COM Class Database <hr>
		</div>


		<div class="sidemenu fleft">
			<ul>
				<li><a href="adminpanel.php"><i class="fa fa-user-circle fa-fw"></i>Admin Panel</a>    </li>
				<li  id ="selectedli"><a href="dcomview.php"><i class="fa fa-pencil fa-fw "></i> D.com Class</a>    </li>	
				<li><a href=""><i class="fa fa-book fa-fw"></i> B.com Class</a>    </li>
				<li><a href=""><i class="fa fa-graduation-cap fa-fw"></i> M.com Class</a>	</li>
				<li><a href=""><i class="fa fa-bar-chart fa-fw"></i> Manage Results</a>	</li>
				<li><a href=""><i class="fa fa-search fa-fw"></i> Search Record</a>	</li>
			</ul>
		</div>

		<div class="admincontent fleft">
			<div>


					<div class="fleft insert sphover">
								 <a href="dcomform.php"><i class="fa fa-plus-circle fa-fw"></i> Insert New Record</a>
					</div>
					<div class="fleft insert sphover">
								 <a href="dcomview.php"><i class="fa fa-database fa-fw"></i> All Student Database</a>
					</div>
					<div class="search fright ">
						<form action="dcomsearch.php" method="GET">

							<input type="text" name="search" placeholder="Roll_no or Name" />
							<button type="submit" name="submit" value="Search" ><i class="fa fa-search"></i></button>
						</form>
					</div>

			</div>

			<div class="studentlist">
							
<?php
if(isset($_GET['detail'])){
$did = $_GET['detail'] ;


$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('fk', $conn);

$dquery = "SELECT * FROM dcom where sid='$did'";
$drun = mysql_query($dquery);

while($row1=mysql_fetch_array($drun))
{
	
echo " <div class='insert sphover'>
						Student Detail
					</div>
			<table>

			<tr><th>Student Name</th><td>". $row1["student_name"] ."</td><th>Father Name:</th><td>". $row1["father_name"] ."</td></tr>
			<tr><th>Roll Number</th><td>". $row1["roll_no"] ."</td><th>CNIC number</th><td>". $row1["cnic"] ."</td></tr>
			<tr><th>Class</th><td>". $row1["class"] ."</td><th>Date of birth</th><td>". $row1["Birth_Date"] ."</td></tr>
			<tr><th>Email</th><td>". $row1["Email"] ."</td><th>Gender</th><td>". $row1["Gender"] ."</td></tr>
			<tr><th>City</th><td>". $row1["City"] ."</td><th>State</th><td>". $row1["State"] ."</td></tr>
			<tr><th>Matric_Course</th><td>". $row1["Matric_Course"] ."</td><th>Matric_Board</th><td>". $row1["Matric_Board"] ."</td></tr>
			<tr><th>Matric_Percentage</th><td>". $row1["Matric_Percentage"] ."</td><th>Matric_PassingOfYear</th><td>". $row1["Matric_PassingOfYear"] ."</td></tr>
			<tr><th>Address</th><td colspan=3>". $row1["Address"] ."</td></tr>
			</table> 


				";
	}


}


?>






							

							
							


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

