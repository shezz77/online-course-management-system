<?php
// Variables

@include_once './../db/connection.php';

$del_rec = $_GET['del'];

$query = "DELETE FROM dcom WHERE sid='$del_rec'";

if(mysqli_query($conn, $query)){
    echo "<script>window.open('dcomview.php?deleted=Record Deleted ','_self')</script>";
}

mysqli_close($conn);
