<?php
session_start();

if(!$_SESSION['user']){
	header('location:userlogin.php?error=login first for entry');
}

?>

<?php
// Variables
if(isset($_POST['submit'])){


$User = "root";
$Password = "";
$Database = "forum";
$Table = "thread";
$Host = "localhost";
$sqldate = date('Y-m-d H:i:s'); 
$idread = $_GET['readid'];
		// Connect to the server
		mysql_connect($Host, $User, $Password) or die (mysql_error()); 
		//Check connectivity
		mysql_select_db($Database) or die(mysql_error());
	$replyer = $_SESSION['user'];

		$insert = "INSERT INTO reply (idthread,reply, user,replydate ) 
					  VALUES('$idread','$_POST[reply]','$replyer','$sqldate')";		

	if (!mysql_query($insert)){
	die("Error:".mysql_error());
}
	

	}

?>
 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Sfk college forum</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">	

<style>
.insert,.search input,.search button,.sidemenu ul li,.sbutton button{ background: white;padding: 9px 22px; border:1px solid blue;}
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:220px;height:637px;}
.sidemenu ul{  list-style-type: none; }
.sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
#selectedli{ background:#8ff; }
#open{ margin-left: 9px; border-right-color: white; background:#8ff; }
.admincontent{ margin-left: 22px;  width:800px;  background:#aa2;padding: 14px; border:1px solid blue; border-left:none;border-radius:0 12px 0 0px }


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
.marginauto{ margin:auto; }
.center{ text-align: center; }

.user{ margin:33px; }
.thread{ margin: 33px; min-height: 156px;background:white; color: blue; font-weight: bold;padding: 22px; }

.whitebutton{ background: white;padding: 9px 22px; border:1px solid blue; width: 200px; text-align: center;}
.whitebutton:hover{ background:#aa2;border: none; }
.whitebutton a:hover{ color: white }

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
  				 	
				 		
					
       					<li ><a href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> <?php 	echo $_SESSION['user'];  ?></a></li>
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
					<li ><a href="../fee/feepanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Fee Data Base</a></li>
					<li><a href="../datesheet/dspanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Manage Date Sheet</a></li>
					<li><a href="../accounts/accountpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i> Accounts DataBase</a></li>
					<li id="open"><a href="../forum/form.php"><i class="fa fa-ellipsis-v fa-fw "></i>Discussion Forum</a></li>
				</ul>




	</div>
	</div>

<div class="marginl">
	
		<div class="maintext"><hr>
			Forum Post Detail <hr>
		</div>

		<div class="greenbg">
<div class="whitebutton sphover fright"><a href="forum.php"> View All posts</a>
	

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
$reid = $_GET['readid'];


$sql = "SELECT * FROM thread where id='$reid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    $row1 = $result->fetch_assoc() 	;
    $user =$row1["user"];

$sql2 = "SELECT * FROM user where user='$user'";
$result2 = $conn->query($sql2);
 $row2 = $result2->fetch_assoc();
     	echo "




<div class='insert sphover center'>
						Topic:".$row1["topic"]."
					</div>
		

			<div class='user fleft'>
			<img src='". $row2["image_path"] . $row2["image_name"] ."' alt='". $row2["image_name"] ."' width=170  height=200 >

			<span style='position:relative;top:-16px;:;left:-135px;background:black;opacity:0.6;font-size:17pt;font-family:sans-serif;font-variant:small-caps;
										padding:5px 11px;color:white;mwidth:222px; text-align:center'>". $row2["user"] ."</span>
			</div>
			<div class='thread'>

			<span style='font-size:small'>Published :".$row1["threaddate"]."</span>
			<br><br>
			".$row1["thread"]."
			</div>





     	";

     				
							} 


else {echo "<p>0 results</p>";}


?>

<br><br>
<?php



$sql3 = "SELECT * FROM reply where idthread='$reid'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
     // output data of each row
    while($row3 = $result3->fetch_assoc()){
    $user =$row3["user"];

$sql4 = "SELECT * FROM user where user='$user'";
$result4 = $conn->query($sql4);
 $row4= $result4->fetch_assoc();

     	echo "

     						<div class='user fleft'>
			<img src='". $row4["image_path"] . $row4["image_name"] ."' alt='". $row4["image_name"] ."' width=170  height=200 >

			<span style='position:relative;top:-16px;left:-135px;;background:black;opacity:0.6;font-size:17pt;font-family:sans-serif;font-variant:small-caps;
										padding:5px 11px;;color:white;width:200px; text-align:center'>". $row4["user"] ."</span>
			</div>
			<div class='thread'>

			<span style='font-size:small'>Published :".$row3["replydate"]."</span>
			<br><br>
			".$row3["reply"]."
			</div>
			<br><br>



     	";

     			}
							} 





?>



<div class="studentlist marginauto" style="width: 77%;">

<table>
			<form method="post" action="read.php?readid=<?php echo $reid; ?>" >
		
			<tr><th colspan="4" style="text-align: center;"> Reply thread </th></tr>

			<tr><td colspan="4"><textarea rows="12" cols="111" name="reply" required></textarea></td></tr>


			</table> 

			<div class="sbutton"><center><button type="submit" name="submit" class="sphover"> Post Reply</button> <button class="sphover" type="reset">Reset</button></center></div>
			</form>
			</div>
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
