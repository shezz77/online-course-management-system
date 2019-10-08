
<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=Login first then Enter');
}

?>




 <!DOCTYPE html>

<html>

<?php
@include_once './../include/head.php';
?>

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



</style>

<body>
<!---------------------------header and fix sidebar-------------------------->

<?php
@include_once './../include/header.php';
@include_once './../include/sidebar.php';
?>


<div class="marginl" >
		<div class="maintext"><hr>
			D.COM Class Database <hr>
		</div>


		<div class="sidemenu fleft">
			<ul>
				<li><a href="managmentpanel.php"><i class="fa fa-user-circle fa-fw"></i>Management</a>    </li>
				<li   id ="selectedli"><a href="dcomtview.php"><i class="fa fa-pencil fa-fw "></i> D.com Class</a>    </li>
				<li><a href="bcomtview.php"><i class="fa fa-book fa-fw"></i> B.com Class</a>    </li>
				<li><a href=""><i class="fa fa-graduation-cap fa-fw"></i> M.com Class</a>	</li>
				<li><a href=""><i class="fa fa-bar-chart fa-fw"></i> Manage Results</a>	</li>
				<li><a href=""><i class="fa fa-search fa-fw"></i> Search Record</a>	</li>
			</ul>
		</div>

		<div class="admincontent fleft">
			<div>


					<div class="fleft insert sphover">
								 <a href="dcomtform.php"><i class="fa fa-plus-circle fa-fw"></i> Insert New Record</a>
					</div>
					<div class="fleft insert sphover">
								 <a href="dcomtview.php"><i class="fa fa-database fa-fw"></i> D.com Teacher Database</a>
					</div>
					<div class="search fright ">
						<form action="dcomtsearch.php" method="GET">

							<input type="text" name="search" placeholder="Reg_no or Name" />
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
$Database = "fkteacher";
$Table = "dcomt";
$Host = "localhost";
$sqlDate = date('Y-m-d H:i:s');

    @include_once './../db/connection_fkteacher.php';



		$upload_image=$_FILES["myimage"]["name"];  //image name

		$folder="Photo/";  // folder name where image will be store
		move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
		// Insert data into DB

		$insert = "INSERT INTO $Table (reg_no,teacher_name, father_name, cnic, Birth_Date,
										  Email, Gender, Address, City,
										  State,salary, qualification,
										  subjects,image_name ,image_path  ,Registration_Date ) 
					  VALUES('$_POST[reg_no]','$_POST[teacher_name]', '$_POST[fname]', '$_POST[nic]', '$_POST[dob]'
							, '$_POST[email]', '$_POST[gender]', '$_POST[address]', '$_POST[city]'
							, '$_POST[state]', '$_POST[salary]', '$_POST[qualification]'
							, '$_POST[subjects]','$upload_image','$folder','$sqlDate')";

	if (!mysqli_query($conn, $insert)){
	die("Error:".mysqli_error($conn));
}
else echo "<div class='insert'><center> <p >  Record Added Successfully  <br>";
	echo "Teacher name is:<strong>";
	echo $_POST['teacher_name'];
	echo "</strong></p></center></div>";

		mysql_close();
	}

?>


					<div class='insert sphover center'>
						Dcom New Teacher Registration
					</div>
			<table>
			<form method="post" action="dcomtform.php" enctype="multipart/form-data">
			<tr ><th>Teacher Name</th><td><input type="text" name="teacher_name" maxlength="50" required/></td>
				<th>Upload Image</th><td><input  type="file" name="myimage" required/></td></tr>


			<tr><th>Father Name</th><td><input type="text" name="fname" maxlength="50"  required /></td>
			<th>Registration No</th><td> <input type="text" name="reg_no" maxlength="15" required /></td></tr>
			<tr><th>Class Teacher</th><td><input type="text" name="class"  disabled value="D.Com" /></td>
			<th>Cnic</th><td><input type="text" name="nic" maxlength="15" placeholder="3210312345671" /></td></tr>
			<tr><th>Email</th><td><input type="email" name="email"  /></td>
			<th>Birth Date</th><td><input type="date" name="dob"  placeholder="MM/DD/YYYY" required/></td></tr>



			<tr><th>Registration Date</th><td><input type="text" id="date" name="reg_date" /></td><th>Gender</th><td>	<select name="gender">
																										<option class="option"> Male</option>
																										<option class="option">Female</option>
																							</select></td></tr>
			<tr><th>City</th><td><input type="text" name="city" maxlength="30" required/></td>
					<th>State</th><td><input type="text" name="state" maxlength="30" required/></td></tr>
			<tr><th>Salary</th><td><input type="text" name="salary"  maxlength="30" required /></td>
				<th>Qualification</th><td><input type="text" name="qualification" maxlength="30" required /></td></tr>
			<tr><th>Subjects</th><td><input type="text" name="subjects" maxlength="30"  required/></td>
				<th>Remarks</th><td><input type="text" name="remarks" maxlength="30" placeholder="if any" /></td></tr>

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

