<?php
// Variables

$User = "root";
$Password = "";
$Database = "forum";
$Host = "localhost";
$sqlDate = date('Y-m-d H:i:s'); 

		// Connect to the server
		mysql_connect($Host, $User, $Password) or die (mysql_error()); 
		//Check connectivity
		mysql_select_db($Database) or die(mysql_error());
		// Delete data into DB
		
		$del_rec = $_GET['del'];
		
		$query = "DELETE FROM user WHERE uid='$del_rec'";
		
		if(mysql_query($query)){
			echo "<script>window.open('accountpanel.php?deleted=Record Deleted ','_self')</script>";
		}
		
		
		
		
		
?>
		