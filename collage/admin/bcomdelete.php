<?php
// Variables

@include_once './../db/connection.php';
		// Delete data into DB

		$del_rec = $_GET['del'];

		$query = "DELETE FROM bcom WHERE sid='$del_rec'";

		if(mysqli_query($conn, $query)){
			echo "<script>window.open('bcomview.php?deleted=Record Deleted ','_self')</script>";
		}





?>
