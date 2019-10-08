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
    .insert,.search input,.search button,.sidemenu ul li{ background: white;padding: 9px 22px; border:1px solid blue;}
    .maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
    .marginl a{ color:blue;}
    .sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:240px;height:400px;}
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

    .studentlist table td{ background: white;padding:9px 22px; width:141px;}
    .studentlist table  th{ background:#8ff; padding:9px 22px; width:151px; }

    .studentlist table td:hover{ background: #8ff; }
    .studentlist table th:hover{ background: white; }






</style>

<body>
<!---------------------------header and fix sidebar-------------------------->

<?php
@include_once './../include/header.php';
@include_once './../include/sidebar.php';
?>





<div class="marginl" >
    <div class="maintext sans"><hr>
        B.COM Class Teacher Database <hr>
    </div>


    <?php
    @include_once './../include/management-sidebar.php';
    ?>

    <div class="admincontent fleft">
        <div>


            <div class="fleft insert sphover">
                <a href="bcomtform.php"><i class="fa fa-plus-circle fa-fw"></i> Insert New Record</a>
            </div>
            <div class="fleft insert sphover">
                <a href="bcomtview.php"><i class="fa fa-database fa-fw"></i> All Teacher Database</a>
            </div>
            <div class="search fright ">
                <form action="bcomtsearch.php" method="GET">

                    <input type="text" name="search" placeholder="Reg_no or Name" />
                    <button type="submit" name="submit" value="Search" ><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>

        <div class="studentlist">

            <?php
            if(isset($_GET['detail'])){
                $did = $_GET['detail'] ;


                $conn = mysql_connect("localhost","root","");
                $db = mysql_select_db('fkteacher', $conn);

                $dquery = "SELECT * FROM bcomt where tid='$did'";
                $drun = mysql_query($dquery);

                while($row1=mysql_fetch_array($drun))
                {

                    echo " <div class='insert sphover'>
						Teacher Detail
					</div>
			<table>
			
			<tr ><th>Teacher Name</th><td>". $row1["teacher_name"] ."</td>


			
			<td rowspan=7 colspan=2 style='background:none;'><center><img src='". $row1["image_path"] . $row1["image_name"] ."' alt='". $row1["image_name"] ."' width=200  height=250 ></center></td></tr>

			<tr><th>Father Name</th><td>"	. $row1["father_name"] ."</td></tr>
			<tr><th>Reg. No</th><td>"		. $row1["reg_no"] ."</td></tr>
			<tr><th>Class Teacher</th><td>"			. $row1["class"] ."</td></tr>
			<tr><th>Cnic</th><td>"			. $row1["cnic"] ."</td></tr>
			<tr><th>Email</th><td>"			. $row1["Email"] ."</td></tr>
			<tr><th>Birth Date</th><td>"	. $row1["Birth_Date"] ."</td></tr>


			
			<tr><th>Registration Date</th><td>". $row1["Registration_Date"] ."</td><th>Gender</th><td>". $row1["Gender"] ."</td></tr>
			<tr><th>City</th><td>". $row1["City"] ."</td><th>State</th><td>". $row1["State"] ."</td></tr>
			<tr><th>Salary</th><td>". $row1["salary"] ."</td><th>Qualification</th><td>". $row1["qualification"] ."</td></tr>
			<tr><th>Address</th><td colspan=3>". $row1["Address"] ."</td></tr>
			</table> ";

                }


            }


            ?>


        </div>


    </div>


</div>

</body>
</html>

