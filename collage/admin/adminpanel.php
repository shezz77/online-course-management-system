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
    #open{ margin-left: 9px; border-right-color: white;background:#8ff }



    .maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
    .marginl a{ color:blue;}
    .sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:220px;height:400px;}
    .sidemenu ul{ list-style-type: none; }
    .sidemenu ul li{border:1px solid blue;border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0;  ;padding:9px 22px; background: white;}
    #selectedli{ background:#8ff; }
    .admincontent{ margin-left: 422px; }



</style>

<body>
<!---------------------------header and fix sidebar-------------------------->


<?php
@include_once './../include/header.php';
@include_once './../include/sidebar.php';

?>


<div class="marginl" >
		<div class="maintext"><hr>
			Welecome <?php echo $_SESSION['user_name'];?> to Student Data Base<hr>
		</div>


		<div class="sidemenu fleft">
			<ul>
				<li id ="selectedli"><a href="adminpanel.php"><i class="fa fa-user-circle fa-fw"></i>Admin Panel</a>    </li>
				<li><a href="dcomview.php"><i class="fa fa-pencil fa-fw "></i> D.com Class</a>    </li>
				<li><a href="bcomview.php"><i class="fa fa-book fa-fw"></i> B.com Class</a>    </li>
				<li><a href=""><i class="fa fa-graduation-cap fa-fw"></i> M.com Class</a>	</li>
				<li><a href=""><i class="fa fa-bar-chart fa-fw"></i> Manage Results</a>	</li>
				<li><a href=""><i class="fa fa-search fa-fw"></i> Search Record</a>	</li>
			</ul>
		</div>

		<div class="admincontent">
		<h3> Insutructions </h3>
		<ul>
			<li> Be carefull while modifying data.</li>
			<li> Once you have entered wrong information , you can delete edit and delete it.</li>
			<li> When you are inserting a new record dont forget to give them a valid Roll no.</li>
			<li> Once a record is deleted then it will not be undo.</li>
			<li>With form submission, Registration date will be stored in database automatically </li>
		</ul>

		</div>

</div>


</body>
</html>
