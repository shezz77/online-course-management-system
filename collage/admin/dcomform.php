
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
#open{ margin-left: 9px; border-right-color: white; background:#8ff}


.insert,.search input,.search button,.sidemenu ul li,.sbutton button{ background: white;padding: 9px 22px; border:1px solid blue;}
.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
.marginl a{ color:blue;}
.sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:220px;height:637px;}
.sidemenu ul{  list-style-type: none; }
.sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
#selectedli{ background:#8ff; }
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



</style>

</head>
<body>
<!---------------------------header and fix sidebar-------------------------->

<?php

include("../include/header.php");

?>
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
	</div>

	
	


<div class="marginl" >
		<div class="maintext"><hr>
			D.COM Class Database <hr>
		</div>


		<div class="sidemenu fleft">
			<ul>
				<li><a href="adminpanel.php"><i class="fa fa-user-circle fa-fw"></i>Admin Panel</a>    </li>
				<li   id ="selectedli"><a href="dcomview.php"><i class="fa fa-pencil fa-fw "></i> D.com Class</a>    </li>	
				<li><a href="bcomview.php"><i class="fa fa-book fa-fw"></i> B.com Class</a>    </li>
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
								 <a href="dcomview.php"><i class="fa fa-database fa-fw"></i> D.com Student Database</a>
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



		$upload_image=$_FILES["myimage"]["name"];  //image name

		$folder="Photo/";  // folder name where image will be store
		move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
		// Insert data into DB
	
		$insert = "INSERT INTO $Table (roll_no,Student_Name, Father_Name, CNIC, Birth_Date,
										  Email, Gender, Address, City,
										  State, Matric_Course, Matric_Board,
										  Matric_Percentage,Matric_PassingOfYear ,
										  image_name ,image_path ,Registration_Date ) 
					  VALUES('$_POST[rollno]','$_POST[sname]', '$_POST[fname]', '$_POST[nic]', '$_POST[dob]'
							, '$_POST[email]', '$_POST[gender]', '$_POST[address]', '$_POST[city]'
							, '$_POST[state]', '$_POST[Matric_Course]', '$_POST[Matric_Board]'
							, '$_POST[Matric_Percentage]', '$_POST[Matric_PassingOfYear]'
							, '$upload_image','$folder','$sqlDate')";		
		
	if (!mysql_query($insert)){
	die("Error:".mysql_error());
}
else echo "<div class='insert'><center> <p >  Record Added Successfully  <br>";
	echo "Student name is:<strong>";
	echo $_POST['sname'];
	echo "</strong></p></center></div>";
	
		mysql_close(); 
	}
		
?>

	
					<div class='insert sphover center' id="error">
						Dcom Addmision New Student
					</div>
			<table>
			<form method="post" action="dcomform.php" enctype="multipart/form-data">
			<tr ><th>Student Name</th><td><input type="text" name="sname" maxlength="50" required/></td>
				<th>Upload Image</th><td><input  type="file" name="myimage" required/></td></tr>


			<tr><th>Father Name</th><td><input type="text" name="fname" maxlength="50"  required /></td>
			<th>Roll No</th><td> <input type="number" name="rollno" min='1' max='500'  onchange="check(this.value)" onblur ="check(this.value)" id="rollno" required /></td></tr>
			<tr><th>Class</th><td><input type="text" name="class"  disabled value="D.Com" /></td>
			<th>Cnic</th><td><input type="text" name="nic" maxlength="15" placeholder="3210312345671" /></td></tr>
			<tr><th>Email</th><td><input type="email" name="email"  id="email" onchange="checkemail(this.value)" onblur ="checkemail(this.value)"  /></td>
			<th>Birth Date</th><td><input type="date" name="dob" id="bd" min="1990-01-01" max="2005-12-12" required/></td></tr>

			<tr><th>Registration Date</th><td><input type="text" id="date" name="reg_date" /></td><th>Gender</th><td>	<select name="gender">
																										<option class="option"> Male</option>
																										<option class="option">Female</option>
																							</select></td></tr>
			<tr><th>City</th><td><input type="text" name="city" maxlength="30" required/></td>
					<th>State</th><td><input type="text" name="state" maxlength="30" required/></td></tr>
			<tr><th>Matric_Course</th><td><input type="text" name="Matric_Course" placeholder="Arts/Science" maxlength="30" required /></td>
				<th>Matric_Board</th><td><input type="text" name="Matric_Board" placeholder="Board Name" maxlength="30" required /></td></tr>
			<tr><th>Matric_Percentage</th><td><input type="text" name="Matric_Percentage" maxlength="30" placeholder=Percentage required/></td>
				<th>Matric_PassingOfYear</th><td><input type="text" name="Matric_PassingOfYear" maxlength="30" placeholder="Year Of Passing" required /></td></tr>
			
			<tr><th>Address</th><td colspan=3><input type="text" name="address" required  style="width: 535px;"  /></td></tr>

			</table> 

			<div class="sbutton"><center><button class="sphover" type="submit" name="submit"> Register </button><button class="sphover" type="reset">Reset</button></center></div>
			</form>
			</div>

		</div>	


</div>
	
	

</body>
</html>

<script>
var d = new Date();
document.getElementById("date").value = d.toDateString();
</script>

<script type="text/javascript">
	function check(rollno){
	var flag;

	dom = document.getElementById('error').style;

if (rollno.length == 0) {dom.color="black";
					dom.fontSize="12pt";
					document.getElementById("error").innerHTML='Dcom Addmision New Student';
					return;}
else if(rollno>500){  return;}


else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                flag = xmlhttp.responseText;
            	if(flag==1){
            		document.getElementById("rollno").value="";
            		document.getElementById("rollno").focus();

            		dom.color="red";
            		dom.fontSize="14pt";
          			document.getElementById("error").innerHTML='Roll No already exist..!';

						}
				else{
					dom.color="black";
					dom.fontSize="12pt";
					document.getElementById("error").innerHTML='Dcom Addmision New Student';
				}
   
            }
        };
        xmlhttp.open("GET", "existing.php?rollno=" + rollno, true);
        xmlhttp.send();
    }
}
</script>


<script type="text/javascript">
	function checkemail(email){
	var flag;

	dom = document.getElementById('error').style;

if (email.length == 0) {  dom.color="black";
					dom.fontSize="12pt";
					document.getElementById("error").innerHTML='Dcom Addmision New Student';return;}

else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                flag = xmlhttp.responseText;
            	
            	if(flag==1){
            		document.getElementById("email").value="";
            		document.getElementById("email").focus();
            		dom.color="red";
            		dom.fontSize="14pt";
          			document.getElementById("error").innerHTML='Email already exist..!';

						}
				else{
					dom.color="black";
					dom.fontSize="12pt";
					document.getElementById("error").innerHTML='Dcom Addmision New Student';
				}
   
            }
        };
        xmlhttp.open("GET", "existing.php?email=" + email, true);
        xmlhttp.send();
    }
}
</script>