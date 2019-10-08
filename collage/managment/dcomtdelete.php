<?php

@include_once './../db/connection_fkteacher.php';

		$del_rec = $_GET['del'];

		$query = "DELETE FROM dcomt WHERE tid='$del_rec'";

		if(mysqli_query($conn, $query)){
			echo "<script>window.open('dcomtview.php?deleted=Record Deleted ','_self')</script>";
		}
