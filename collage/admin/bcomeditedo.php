

<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=login first then come');
}

?>


<?php

$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('fk', $conn);

$edit_record = $_GET['edit'];

$query = "SELECT * FROM bcom WHERE sid='$edit_record'";

$run = mysql_query($query);

while ($row=mysql_fetch_array($run) )
{
	$sid 		 = $row['sid'];
	$roll_no 	 = $row['roll_no'];
	$student_name = $row['student_name'];
	$father_name = $row['father_name'];
	$Birth_Date  = $row['Birth_Date'];
	$Email		 = $row['Email'];
	$Address	 = $row['Address'];
	$City  		 = $row['City'];
	$State 		 = $row['State'];
	$cnic		 = $row['cnic'];
	$Matric_Course 			 = $row['Matric_Course'];
	$Matric_Board 			 = $row['Matric_Board'];
	$Matric_Percentage   	 = $row['Matric_Percentage'];
	$Matric_PassingOfYear 	 = $row['Matric_PassingOfYear'];
	$inter_course 			 = $row['inter_course'];
	$inter_board 			 = $row['inter_board'];
	$inter_percentage   	 = $row['inter_percentage'];
	$inter_year 			 = $row['inter_year'];
	
}

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Bcom Student Update Form Online Course Management System</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">	

<style>

.sidebar ul{ list-style-type: none;  padding: 0;}
.sidebar ul li{ background:url(../images/bg-body.jpg);;border:1px solid blue;padding: 11px 0 11px 11px;  margin:11px 0;border-radius: 22px 0 0 22px; }
.sidebar ul li:hover{ cursor: auto;border-right-color: white; margin-left: 7px;}
.sidebar ul li a{ color:blue; }
.sidebar ul li a:hover{ color: black; }
#open a{ color:black; }
#open{ margin-left: 9px; border-right-color: white;background:#8ff }


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
					<li >	<a href="../pages/index.html"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li><a href="../pages/facilities.html">Facilities</a></li>
					
					<li><a href="../pages/collegereview.html">College</a></li>
					<li><a href="../pages/timetable.html">Time Table</a></li>
					<li><a href="../pages/download.html">Downloads</a></li>
				
				
				
					
				</ul>
			</div>
		</div>
	</div>



	
	<div class="sidebar">	


				<ul>
				     <li id='open'><a href="../admin/adminpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Student Data Base</a></li>
					<li ><a href="../managment/managmentpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i></i>Staff Data Base</a></li>
					<li><a href="../fee/feepanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Fee Data Base</a></li>
					<li><a href="../datesheet/dspanel.php"><i class="fa fa-ellipsis-v fa-fw "></i>Manage Date Sheet</a></li>
					<li><a href="../accounts/accountpanel.php"><i class="fa fa-ellipsis-v fa-fw "></i> Accounts DataBase</a></li>
					<li><a href="../forum/form.php"><i class="fa fa-ellipsis-v fa-fw "></i>Discussion Forum</a></li>
				</ul>


	</div>


		


<div class="frm">
<form method='post' action='bcomedited.php?edited_form=<?php echo $sid;?>' enctype="multipart/form-data">
<h2 id="h22">Student Update Form</h2>
<div class="inpt">
<label> Change Photo </label> <input type="file" name="myimage" required />
<br><hr>
		<label> Student Roll NO</label>
		<input type="text" name="roll_no1" value="<?php echo $roll_no;?>" required />
<br><hr>
		<label> Student Name </label>
		<input type="text" name="student_name1" value="<?php echo $student_name;?>" required />
<br><hr>
		<label> Father Name</label> 
		<input type="text" name="father_name1" value="<?php echo $father_name;?>" required />
<br><hr>
		<label> CNIC</label> 
		<input type="text" name="cnic1" value="<?php echo $cnic;?>" maxlength='15' required />
<br><hr>
		<label> Email</label> 
		<input type="text" name="Email1" value="<?php echo $Email;?>" />
<br><hr>
<label> Date of Birth</label>
		 <input type="date" name="Birth_Date1"  value="<?php echo $Birth_Date?>" required/>
<br><hr>
<label>Gender</label><br>

Male<input  type="radio" name="Gender1" value="Male" checked="checked" />
<br>
Female<input  type="radio" name="Gender1" value="Female" />
<br> <hr>
		<label> Address</label><textarea name="Address1" rows="4" cols="50"  ><?php echo $Address;?></textarea>
<br><hr>
<label>City</label><input type="text" name="City1" maxlength="30" value="<?php echo $City;?>" required/>
<br><hr>
<label>State</label><input type="text" name="State1" maxlength="30" value="<?php echo $State;?>" required/>
<br><hr>
<label>Qualification</label>


 <br>
<label>1-Matric</label>

<input type="text" name="Matric_Course1"	value="<?php echo $Matric_Course;?>" maxlength="30" required /><br><br>
<input type="text" name="Matric_Board1" value="<?php echo $Matric_Board;?>" maxlength="30" required /><br><br>
<input type="text" name="Matric_Percentage1" value="<?php echo $Matric_Percentage;?>" maxlength="5" required/><br><br>
<input type="text" name="Matric_PassingOfYear1" value="<?php echo $Matric_PassingOfYear;?>" maxlength="10"  required />
<br><hr>
<label>Intermediate</label>

<input type="text" name="ic"	value="<?php echo $inter_course;?>" maxlength="30" required /><br><br>
<input type="text" name="ib" value="<?php echo $inter_board;?>" maxlength="30" required /><br><br>
<input type="text" name="ip" value="<?php echo $inter_percentage;?>" maxlength="5" required/><br><br>
<input type="text" name="iy" value="<?php echo $inter_year;?>" maxlength="10"  required />
<br><hr>
</div>
<br><br>

<div class="bttn"><input type="submit" value="Update" name="update"/>
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
			<a href="../pages/index.html"><i class="fa fa-home fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-info-circle fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-address-book-o fa-lg "></i></a>
			<a href="logout.php"><i class="fa fa-sign-out fa-lg "></i></a>
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


<?php
if(isset($_POST['update']))
{
	$edited_id 			= $_GET['edited_form'];
	$roll_no1			= $_POST['roll_no1'];
	$student_name1		= $_POST['student_name1'];
	$father_name1		= $_POST['father_name1'];
	$cnic1				= $_POST['cnic1'];
	$Birth_Date1		= $_POST['Birth_Date1'];
	$Email1				= $_POST['Email1'];
	$Gender1			= $_POST['Gender1'];
	$Address1			= $_POST['Address1'];
	$City1				= $_POST['City1'];
	$State1				= $_POST['State1'];
	$Matric_Course1		= $_POST['Matric_Course1'];
	$Matric_Board1		= $_POST['Matric_Board1'];
	$Matric_Percentage1		= $_POST['Matric_Percentage1'];
	$Matric_PassingOfYear1	= $_POST['Matric_PassingOfYear1'];
	$ic		= $_POST['ic'];
	$ib		= $_POST['ib'];
	$ip		= $_POST['ip'];
	$iy 	= $_POST['iy'];


	$upload_image=$_FILES["myimage"]["name"];  //image name

		$folder="Photo/";  // folder name where image will be store
		move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]); 

	$query1 = "UPDATE bcom SET roll_no='$roll_no1',
								student_name='$student_name1',
								father_name='$father_name1',
								cnic='$cnic1',
								Birth_Date='$Birth_Date1',
								Email='$Email1',
								Gender='$Gender1',
								Address='$Address1',
								City='$City1',
								State='$State1',
								Matric_Course='$Matric_Course1',
								
								Matric_Percentage='$Matric_Percentage1',
								Matric_PassingOfYear='$Matric_PassingOfYear1',
								Matric_Board='$Matric_Board1',

								inter_course='$ic',
								inter_board='$ib',
								inter_percentage='$ip',
								inter_year='$iy',


								image_path = '$folder' ,
								image_name = '$upload_image'


							WHERE sid=$edited_id ";

	
	if(mysql_query($query1))
	{
		echo "<script>window.open('bcomview.php?updated=Record Updated','_self')</script>";
	}
	
	}
	?>