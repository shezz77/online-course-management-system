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

    .maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;padding:13px;}
    .marginl a{ color:blue;}
    .sidemenu{ border:1px solid blue; border-right: none;border-radius:12px 0 0 0px ;padding:4px;padding-right:0;background:#aa2;width:232px;height:400px;}
    .sidemenu ul{ list-style-type: none; }
    .sidemenu ul li{border:1px solid blue;border-right: none;border-radius:12px 0 0 12px ; margin: 22px 0;  ;padding:9px 22px; background: white;}
    #selectedli{ background:#8ff; }
    .admincontent{ margin-left: 422px; }
    #open{ margin-left: 9px; border-right-color: white; background:#8ff; }
</style>

<body>
<!---------------------------header and fix sidebar-------------------------->


<?php
    @include_once './../include/header.php';
    @include_once './../include/sidebar.php';
?>


<div class="marginl" >
		<div class="maintext"><hr>
			Welcome <?php echo $_SESSION['user_name'];?> to Management Panel<hr>
		</div>

    <?php
        @include_once './../include/management-sidebar.php';
    ?>

		<div class="admincontent">
		<h3> Insutructions </h3>
		<ul>
			<li> Be carefull while modifying data.</li>
			<li> Once you have entered wrong information , you can delete edit and delete it.</li>
			<li> When you are inserting a new record dont forget to give them a valid Serial NO</li>
			<li> Once a record is deleted then it will not be undo.</li>
			<li>With form submission, Registration date will be stored in database automatically </li>
		</ul>


		</div>


</div>

</body>
</html>
