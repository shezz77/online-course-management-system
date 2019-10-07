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
	<title>D.com Student Registration Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">	

<style>
.frm{  background:green; border-radius:30px;width:444px;padding:50px 50px ;margin:auto;font-family:rokkittbold}
.inpt{color:white;margin:22px 22px; padding:10px; border-radius:30px;font-family:rokkittbold}
.inpt input{ ; padding-left:22px;float:right;font-family:rokkittbold}
label{ float:left;}
#h22{ text-align:center; margin-top:0px;}
select{float:right;}



.bttn{ background:silver;padding:10px 22px ;border-radius:22px; width:122px;margin-left:144px; }
.bttn input{ border:none; background:none;color:blue;font-weight:bold;font-family:rokkittbold;font-size:16px;}
.bttn input:hover{ color:black;}
@media only screen and (max-width:993px){
.frm{ margin-left:0;background:blue;}
}
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
  				 		<li><a href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> <?php echo $_SESSION['user_name'];?></a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw "></i>Setting</a></li>
						<li><a href="#"><i class="fa fa-address-book-o fa-fw" aria-hidden="true"></i>Profile</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw fa-lg " aria-hidden="true"></i>Sign Out</a></li>
     				   
     				   </ul> 
  			
				</div>


				
				<ul class="selful">
					<li>	<a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li><a href="#">Managment</a></li>
					
					<li><a href="addnew.html">Admission</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Downloads</a></li>
				
				
					
				</ul>
			</div>
		</div>
	</div>



	
	<div class="sidebar">	


				<ul class="sideul">
					<li ><a href="adminpanel.php">Admin Panel</a></li>
					<li><a href="dcomview.php">D.COM Class</a></li>
					<li><a href="#"><i class="fa fa-ellipsis-v fa-fw "></i>Head Office</a></li>
					<li><a href="#">Public Holiday</a></li>
					<li><a href="#">Results</a></li>
					<li><a href="#">I am fk</a></li>
				</ul>



	</div>

<!-----------------------------form page content----------------->
<!---------------------------------------------------------->
<?php
// Variables
if(isset($_POST['submit'])){
$User = "root";
$Password = "";
$Database = "fk";
$Table = "dcom";
$Host = "localhost";
$sqlDate = date('Y-m-d H:i:s'); 

		// Connect to the server
		mysql_connect($Host, $User, $Password) or die (mysql_error()); 
		//Check connectivity
		mysql_select_db($Database) or die(mysql_error());
		// Insert data into DB
	
		$insert = "INSERT INTO $Table (roll_no,Student_Name, Father_Name, CNIC, Birth_Date,
										  Email, Gender, Address, City,
										  State, Matric_Course, Matric_Board,
										  Matric_Percentage,Matric_PassingOfYear , Registration_Date ) 
					  VALUES('$_POST[rollno]','$_POST[sname]', '$_POST[fname]', '$_POST[nic]', '$_POST[dob]'
							, '$_POST[email]', '$_POST[gender]', '$_POST[address]', '$_POST[city]'
							, '$_POST[state]', '$_POST[Matric_Course]', '$_POST[Matric_Board]'
							, '$_POST[Matric_Percentage]', '$_POST[Matric_PassingOfYear]','$sqlDate')";		
		
	if (!mysql_query($insert)){
	die("Error:".mysql_error());
}
else echo "<center> <p >  Record Added Successfully  <br>";
	echo "Student name is:<strong>";
	echo $_POST['sname'];
	echo "</strong></p></center>";
	
		mysql_close(); 
	}
		
?>
<br>
<div class="frm">
<form action="dcomform.php" method="POST">
<h2 id="h22">D.COM STUDENT REGISTRATION FORM</h2>
<div class="inpt">
<label> Student Name </label> <input type="text" name="sname" maxlength="50" required/>
<br><hr>
<label> Father Name</label> <input type="text" name="fname" maxlength="50" required/>
<br><hr>
<label> CNIC</label> <input type="text" name="nic" maxlength="15" placeholder="3210312345671" />
<br><hr>
<label> Date of Birth</label> <input type="date" name="dob"  placeholder="MM/DD/YYYY" required/>
<br><hr>
<label> Roll No</label> <input type="text" name="rollno" maxlength="15" required />
<br><hr>
<label>Email</label><input type="email" name="email"  />
<br><hr>
<label>Gender</label><br>

Male<input  type="radio" name="gender" value="Male" checked="checked" />
<br>
Female<input  type="radio" name="gender" value="Female" />
<br> <hr>
<label> Address</label><textarea name="address" rows="4" cols="50"></textarea>
<br><hr>
<label>City</label><input type="text" name="city" maxlength="30" required/>
<br><hr>
<label>State</label><input type="text" name="state" maxlength="30" required/>
<br><hr>

<label>Qualification</label>


 <br>
<label>1-Matric</label>

<input type="text" name="Matric_Course" placeholder="Arts/Science" maxlength="30" required /><br><br>
<input type="text" name="Matric_Board" placeholder="Board Name" maxlength="30" required /><br><br>
<input type="text" name="Matric_Percentage" maxlength="30" placeholder=Percentage required/><br><br>
<input type="text" name="Matric_PassingOfYear" maxlength="30" placeholder="Year Of Passing" required />
<br><hr>

</div>
<br><br>

<div class="bttn"><input type="submit" name="submit" value="Register"/>
<input  type="reset" value="Reset"/></div>



</div>
</form>

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
