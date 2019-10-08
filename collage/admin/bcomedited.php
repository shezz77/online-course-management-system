

<?php
session_start();

if(!$_SESSION['user_name']){
    header('location:admin_login.php?error=login first then come');
}

?>


<?php

@include_once './../db/connection.php';

$edit_record = $_GET['edit'];

$query = "SELECT * FROM bcom WHERE sid='$edit_record'";

$run = mysqli_query($conn, $query);

while ($row=mysqli_fetch_array($run) )
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

<body>
<!---------------------------header and fix sidebar-------------------------->

<?php
include('../include/header.php');
@include_once './../include/sidebar.php';
?>





<div class="marginl" >
    <div class="maintext"><hr>
        B.COM Class Database <hr>
    </div>


    <?php
    @include_once './../include/sub-sidebar.php';
    ?>


    <div class="admincontent fleft">
        <div>


            <div class="fleft insert sphover">
                <a href="bcomform.php"><i class="fa fa-plus-circle fa-fw"></i> Insert New Record</a>
            </div>
            <div class="fleft insert sphover">
                <a href="bcomview.php"><i class="fa fa-database fa-fw"></i> B.com Student Database</a>
            </div>
            <div class="search fright ">
                <form action="bcomsearch.php" method="GET">

                    <input type="text" name="search" placeholder="Roll_no or Name" />
                    <button type="submit" name="submit" value="Search" ><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>

        <div class="studentlist">



            <div class='insert sphover center'>
                Bcom Student Update
            </div>
            <table>
                <form method="post" action="bcomedited.php?edited_form=<?php echo $sid;?>" enctype="multipart/form-data">
                    <tr ><th>Student Name</th><td><input type="text" name="student_name1" value="<?php echo $student_name;?>" maxlength="50" required/></td>
                        <th>Upload Image</th><td><input  type="file" name="myimage" required/></td></tr>


                    <tr><th>Father Name</th><td><input type="text" name="father_name1" value="<?php echo $father_name;?>" maxlength="50"  required /></td>
                        <th>Roll No</th><td> <input type="text" name="roll_no1" value="<?php echo $roll_no;?>" maxlength="15" required /></td></tr>
                    <tr><th>Class</th><td><input type="text" name="class"  disabled value="D.Com" /></td>
                        <th>Cnic</th><td><input type="text" name="cnic1" value="<?php echo $cnic;?>" maxlength="15"  /></td></tr>
                    <tr><th>Email</th><td><input type="email" name="Email1" value="<?php echo $Email;?>"  /></td>
                        <th>Birth Date</th><td><input type="date" name="Birth_Date1"  value="<?php echo $Birth_Date?>"   required/></td></tr>



                    <tr><th>Registration Date</th><td><input type="text" id="date" name="reg_date" /></td><th>Gender</th><td>	<select name="Gender1">
                                <option class="option"> Male</option>
                                <option class="option">Female</option>
                            </select></td></tr>
                    <tr><th>City</th><td><input type="text" name="City1" maxlength="30" value="<?php echo $City;?>" required/></td>
                        <th>State</th><td><input type="text" name="State1" maxlength="30" value="<?php echo $State;?>" required/></td></tr>
                    <tr><th>Matric_Course</th><td><input type="text" name="Matric_Course1"	value="<?php echo $Matric_Course;?>" maxlength="30" required /></td>
                        <th>Matric_Board</th><td><input type="text" name="Matric_Board1" value="<?php echo $Matric_Board;?>" maxlength="30" required /></td></tr>
                    <tr><th>Matric_Percentage</th><td><input type="text" name="Matric_Percentage1" value="<?php echo $Matric_Percentage;?>" required/></td>
                        <th>Matric_PassingOfYear</th><td><input type="text" name="Matric_PassingOfYear1" value="<?php echo $Matric_PassingOfYear;?>" required /></td></tr>

                    <tr><th>Address</th><td colspan=3><input type="text" name="Address1" value="<?php echo $Address;?>" required  style="width: 535px;"  /></td></tr>

            </table>

            <div class="sbutton"><center><button class="sphover" type="submit" name="submit"> Update </button><button class="sphover" type="reset">Reset</button></center></div>
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

<?php
if(isset($_POST['submit']))
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
								image_path = '$folder' ,
								image_name = '$upload_image'

							WHERE sid=$edited_id ";
    if(mysqli_query($conn,$query1))
    {
        echo "<script>window.open('bcomview.php?updated=Record Updated successfully','_self')</script>";}
    else  echo mysqli_error();

}


?>
