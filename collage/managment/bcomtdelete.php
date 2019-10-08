<?php
// Variables

@include_once './../db/connection_fkteacher.php';

// Delete data into DB

$del_rec = $_GET['del'];

$query = "DELETE FROM bcomt WHERE tid='$del_rec'";

if(mysqli_query($conn, $query)){
    echo "<script>window.open('bcomtview.php?deleted=Record Deleted ','_self')</script>";
}


