<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=login first then come');
}

?>

<!DOCTYPE html>

<html>

<?php
@include_once './../include/head.php';
?>

<style>
    .sidebar ul{ list-style-type: none;  padding: 0;}
    .sidebar ul li{ background:url(../images/bg-body.jpg);;border:1px solid blue;padding: 11px 0 11px 11px;  margin:11px 0;border-radius: 22px 0 0 22px; }
    .sidebar ul li:hover{ cursor: auto;border-right-color: white; margin-left: 7px;}
    .sidebar ul li a{ color:blue; }
    .sidebar ul li a:hover{ color: black; }
    #open a{ color:black; }
    #open{ margin-left: 9px; border-right-color: white; background:#8ff}



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

<body>
<!---------------------------header and fix sidebar-------------------------->

<?php
include('../include/header.php');
@include_once './../include/sidebar.php';
?>


<!-----------------------------form page content----------------->
<!---------------------------------------------------------->
<?php
// Variables
if(isset($_POST['submit'])){
    @include_once './../db/connection.php';



		$upload_image=$_FILES["myimage"]["name"];  //image name

		$folder="Photo/";  // folder name where image will be store
		move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
		// Insert data into DB

		$insert = "INSERT INTO $Table (roll_no,Student_Name, Father_Name, CNIC, Birth_Date,
										  Email, Gender, Address, City,
										  State, Matric_Course, Matric_Board,
										  Matric_Percentage,Matric_PassingOfYear , inter_course,
										  inter_board,inter_percentage,inter_year,
										  image_name ,image_path ,Registration_Date ) 
					  VALUES('$_POST[rollno]','$_POST[sname]', '$_POST[fname]', '$_POST[nic]', '$_POST[dob]'
							, '$_POST[email]', '$_POST[gender]', '$_POST[address]', '$_POST[city]'
							, '$_POST[state]', '$_POST[Matric_Course]', '$_POST[Matric_Board]'
							, '$_POST[Matric_Percentage]', '$_POST[Matric_PassingOfYear]','$_POST[inter_course]'
							, '$_POST[inter_board]','$_POST[inter_percentage]','$_POST[inter_year]'
							, '$upload_image','$folder','$sqlDate')";

	if (!mysqli_query($conn, $insert)){
	die("Error:".mysqli_error());
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
<form action="bcomform.php" method="POST" enctype="multipart/form-data">
<h2 id="h22">B.COM STUDENT REGISTRATION FORM</h2>
<div class="inpt">
<label> Student Photo </label> <input type="file" name="myimage" required/>
<br><hr>
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
<label>City</label>
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
<label>2-Intermediate</label>

<input type="text" name="inter_course" placeholder="fsc/F.A" maxlength="30" required /><br><br>
<input type="text" name="inter_board" placeholder="Board/University/clg" maxlength="30" required /><br><br>
<input type="text" name="inter_percentage" maxlength="30" placeholder=Percentage required/><br><br>
<input type="text" name="inter_year" maxlength="30" placeholder="Year Of Passing" required />
<br><hr>

</div>
<br><br>

<div class="bttn"><input type="submit" name="submit" value="Register"/>
<input  type="reset" value="Reset"/></div>



</div>
</form>


</body>
</html>
