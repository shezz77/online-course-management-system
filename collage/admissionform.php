

<?php
define('DB_NAME', 'fk');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
		die("could not connect:" . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME , $link);

if(!$db_selected){
			die("cant connect".DB_NAME.mysql_error());
}

$sql = "INSERT INTO admission (sname, fname, nic, bday) VALUES('$_POST[sname]', '$_POST[fname]', '$_POST[nic]', '$_POST[dob]')";
if (!mysql_query($sql)){
	die("Error:".mysql_error());
}
else echo " <p>Thanks by fk . your data is saved <a href='index.html'>click here to submit more data</a></p>";



mysql_close();

?>