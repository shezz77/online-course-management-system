<?php
// Variables//

$User = "root";
$Password = "";
$Database = "fk";
$Table = "admission";
$Host = "localhost";
$sqlDate = date('Y-m-d H:i:s'); 

		// Connect to the server
		mysql_connect($Host, $User, $Password) or die (mysql_error()); 
		//Check connectivity
		mysql_select_db($Database) or die(mysql_error());
		// Insert data into DB
		$insert = "INSERT INTO admission (sname, fname, nic, bday,
										  email, gender, address, city,
										  state, country, Matric_Board, Matric_Percentage,
										  Matric_PassingOfYear, Inter_Board, Inter_Percentage, Inter_PassingOfYear,
										Grad_Board, Grad_Percentage,Grad_PassingOfYear, course , 
										Registration_Date ) 
					  VALUES('$_POST[sname]', '$_POST[fname]', '$_POST[nic]', '$_POST[dob]'
							, '$_POST[email]', '$_POST[gender]', '$_POST[address]', '$_POST[city]'
							, '$_POST[state]', '$_POST[country]', '$_POST[Matric_Board]', '$_POST[Matric_Percentage]'
							, '$_POST[Matric_PassingOfYear]', '$_POST[Inter_Board]', '$_POST[Inter_Percentage]', '$_POST[Inter_PassingOfYear]'
							, '$_POST[Grad_Board]', '$_POST[Grad_Percentage]', '$_POST[Grad_PassingOfYear]', '$_POST[course]'
							, '$sqlDate')";	
		
	if (!mysql_query($insert)){
	die("Error:".mysql_error());
}
else echo " <p>Thanks by fk . your data is saved <a href='index.html'>click here to submit more data</a></p>";
		mysql_close(); 
	 
		
?>
