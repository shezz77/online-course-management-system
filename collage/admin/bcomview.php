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


    .insert,.search input,.search button,.sidemenu ul li{ background: white;padding: 9px 22px; border:1px solid blue;}
    .maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
    .marginl a{ color:blue;}
    .sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:220px;height:400px;}
    .sidemenu ul{  list-style-type: none; }
    .sidemenu ul li{border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0; }
    #selectedli{ background:#8ff;}
    .admincontent{ margin-left: 22px;  width:800px;  min-height:  380px; background:#aa2;padding: 14px; border:1px solid blue; border-left:none;border-radius:0 12px 0 0px }


    .search input{ width:111px;border-right: none;border-radius:12px 0 0 12px ; }
    .search button{ border-left:none;border-radius:0 12px 12px 0 ;}
    .insert{ border-radius: 12px; }
    .admincontent div{margin:11px 4px;}


    .studentlist{clear: both; font-family: sans-serif;}


    .titlelist ul{list-style-type: none; display: inline; border-radius: 12px 12px 0 0;}
    .titlelist ul li{ float:left; background: white;width:150px; padding: 9px 8px; border:1px solid blue;border-right: none;border-bottom:none;}
    .titlelist ul li:first-child{ width:50px;border-radius: 12px 0 0 0; }
    .titlelist ul li:last-child{ border-radius:0 12px 0 0 ;border-right:1px solid blue; }


    .detaillist ul{ list-style-type: none;display:inline;  font-size:small;}
    .detaillist ul li:hover{ background: #8ff; }
    .detaillist ul li{ float: left;background: white;width:150px;max-width: 150px ;padding: 9px 8px;border-left:1px solid blue; margin-bottom: 3px;}
    .detaillist ul li:first-child{width:50px;clear: both; }
    .detaillist ul li:last-child{border-right: 1px solid blue;}



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


    <div class="sidemenu fleft">
        <ul>
            <li><a href="adminpanel.php"><i class="fa fa-user-circle fa-fw"></i>Admin Panel</a>    </li>
            <li><a href="dcomview.php"><i class="fa fa-pencil fa-fw "></i> D.com Class</a>    </li>
            <li  id ="selectedli"><a href="bcomview.php"><i class="fa fa-book fa-fw"></i> B.com Class</a>    </li>
            <li><a href=""><i class="fa fa-graduation-cap fa-fw"></i> M.com Class</a>	</li>
            <li><a href=""><i class="fa fa-bar-chart fa-fw"></i> Manage Results</a>	</li>
            <li><a href=""><i class="fa fa-search fa-fw"></i> Search Record</a>	</li>
        </ul>
    </div>

    <div class="admincontent fleft">
        <div>


            <div class="fleft insert sphover">
                <a href="bcomform.php"><i class="fa fa-plus-circle fa-fw"></i> Insert New Record</a>
            </div>

            <?php



            if(isset($_GET['updated'])){
                echo "<div class='fleft insert sphover'><i class='fa fa-check fa-fw fa-lg'></i>
							".$_GET['updated']."
					</div>";
            }

            ?>

            <?php



            if(isset($_GET['deleted'])){
                echo "<div class='fleft insert sphover'><i class='fa fa-check fa-fw'></i>
							".$_GET['deleted']."
					</div>";
            }

            ?>



            <div class="search fright">
                <form action="bcomsearch.php" method="GET">

                    <input type="text" name="search" placeholder="Roll_no or Name" />
                    <button type="submit" name="submit" value="Search" ><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>
        <center>
            <div class="studentlist">
                <div class="titlelist">
                    <ul>
                        <li>Sr.no</li>
                        <li>Roll No</li>
                        <li>Student Name</li>
                        <li>Father Name</li>
                        <li><i class="fa fa-gear fa-fw"></i> Modification</li>
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

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {	$del=$row["sid"]; $edit=$row["sid"];$det=$row["sid"];


                        echo " <div class='detaillist'>

								<ul >
									<li>".$i."</li>
									<li>". $row["roll_no"] ."</li>
									<li>". $row["student_name"]  ."</li>
									<li>". $row["father_name"]  ."</li>
									<li>
										<a href='bcomedited.php?edit=$edit'><i class='fa fa-edit fa-lg fa-fw'></i></a>
										<a href='bcomdelete.php?del=$del'><i class='fa fa-remove fa-lg fa-fw'></i></a>
										<a href='bcomdetail.php?detail=$det'><i class='fa fa-info-circle fa-lg fa-fw'></i></a>
									</li>
								</ul>

					</div>
				";
                        $i++;

                    }

                } else {
                    echo "<p>0 results</p>";
                }

                $conn->close();

                ?>



            </div>
        </center>

    </div>


</div>


</body>
</html>
