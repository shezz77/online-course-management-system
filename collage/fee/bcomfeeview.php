<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=login first then come');
}

?>
<?php
if(isset($_POST['update']))
{
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('fk', $conn);
	

	$updated			= $_POST['updated'];
	$edit 				= $_POST['editing'];
 

 //Get paidfee ammount from database
 $sql = "SELECT paidfee FROM bcom  WHERE sid=$edit  ";
$run = mysql_query($sql);

//now resourse id is returned just convert it to array
$row=mysql_fetch_array($run);

//save result fk by accessing the only first elemnt in array
$result = $row[0]+$updated;

//now upload it to database

	$query1 = "UPDATE bcom SET paidfee='$result'	WHERE sid=$edit ";
	if(mysql_query($query1))
	{
		}
		else  echo mysql_error();
	

}
	
	
	?>


 
 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>B.Com Fee Managment Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">	

<style>
.insert,.search input,.search button,.sidemenu ul li{ background: white;padding: 9px 22px; border:1px solid blue;}
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:240px;height:400px;}
.sidemenu ul{  list-style-type: none; }
.sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
#selectedli{ background:#8ff;}
#open{ margin-left: 9px; border-right-color: white; background:#8ff; }
.admincontent{ margin-left: 22px;  width:800px;min-height:  380px; background:#aa2;padding: 14px; border:1px solid blue; border-left:none;border-radius:0 12px 0 0px }


.search input{ width:111px;border-right: none;border-radius:12px 0 0 12px ; }
.search button{ border-left:none;border-radius:0 12px 12px 0 ;}
.insert{ border-radius: 12px; }
.admincontent div{margin:11px 4px;}


.studentlist{clear: both; font-family: sans-serif;}


.titlelist ul{list-style-type: none; display: inline; border-radius: 12px 12px 0 0;}
.titlelist ul li{ float:left; background: white;width:116px; padding: 9px 8px; border:1px solid blue;border-right: none;border-bottom:none;}
.titlelist ul li:first-child{ width:60px;border-radius: 12px 0 0 0; }
.titlelist ul li:last-child{ border-radius:0 12px 0 0 ;border-right:1px solid blue; }


.detaillist ul{ list-style-type: none;display:inline;  font-size:small;}
.detaillist ul li:hover{ background: #8ff; }
.detaillist ul li{ float: left;background: white;width:116px;max-width: 150px ;padding: 9px 8px;border-left:1px solid blue; margin-bottom: 3px;}
.detaillist ul li:first-child{width:60px;clear: both; }
.detaillist ul li:last-child{border-right: 1px solid blue; padding:0 8px;margin: 0}

.detaillist ul li input{ width: 70px; padding: 9px 8px;border:none;}
.detaillist ul li input:focus{ outline: none }
.detaillist ul li button{ padding:0;margin: 8px 0;border:none;background: white; cursor: url(../images/pointer.png) ,auto;}

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
					<li  id="open"><a href="../fee/feepanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Fee Data Base</a></li>
					<li><a href="../datesheet/dspanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Manage Date Sheet</a></li>
					<li><a href="../accounts/accountpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i> Accounts DataBase</a></li>
					<li><a href="../forum/form.php"><i class="fa fa-ellipsis-v fa-fw "></i>Discussion Forum</a></li>
				</ul>




	</div>
	</div>

	
	


<div class="marginl" >
		<div class="maintext"><hr>
			B.com Fee Managment <hr>
		</div>


		<div class="sidemenu fleft">
			<ul>
				<li ><a href="feepanel.php"><i class="fa fa-user-circle fa-fw"></i>Fee Panel</a>    </li>
				<li><a href="dcomfeeview.php"><i class="fa fa-pencil fa-fw "></i> D.com Class Fee</a>    </li>	
				<li  id ="selectedli"><a href="bcomfeeview.php"><i class="fa fa-book fa-fw"></i> B.com Class Fee</a>    </li>
				<li><a href="mcomfeeview.php"><i class="fa fa-graduation-cap fa-fw"></i> M.com Class Fee</a>	</li>
				<li><a href=""><i class="fa fa-ban fa-fw"></i>Old Date Sheet</a>	</li>
	
	
			</ul>
		</div>

		<div class="admincontent fleft">
			<div>


					

					



					
			</div>
<center>
			<div class="studentlist">
							<div class="titlelist">
								<ul>
									<li>RollNo</li>
									<li>Name</li>
									<li>Monthly </li>
									<li>Paid</li>
									<li>Remaining</li>
									<li> Update</li>
								</ul>

							</div>






<?php

$dbname = "fk";
$username = "root";
$password = "";
$servername = "localhost";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM bcom";
$result = $conn->query($sql);
$i=1;
$remaining=0;
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {	

     										 $edit=$row["sid"];
     										$remaining=$row["monthlyfee"]- $row["paidfee"] ;$k=$row["paidfee"];

     										if($k==0){ $k="<i class='fa fa-remove'></i>";}
     										else     { $k="<i class='fa fa-check'></i>";}


         echo " <div class='detaillist'>

								<ul >
									<li>". $row["roll_no"] ."</li>
									<li>". $row["student_name"] ."</li>
									<li>". $row["monthlyfee"]  ."</li>
									<li>	$k   </li>
									<li>". $remaining  ."</li>

									<li>
										<form action='bcomfeeview.php' method='post'>
										<input type='number'  name='updated'  max='".$row['monthlyfee']."' min='1' required/>
										<input type='hidden' name='editing' value='$edit'>

										<button  type='submit' name='update' class='fright'><i class='fa fa-plus-circle fa-lg '></i></button>
										</form>
										
									</li>
								</ul>

					</div>
				";
				$i++;

         
     									}
	
							} else {
   										  echo "<p>0 results</p>";
									}



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
