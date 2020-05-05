<?php

$host="localhost";
$username="root";
$password= "";
$dbname="testphp";
$conn= mysqli_connect($host, $username, $password, $dbname);


//assigning php variables to current html values
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];



//verify password mactches 
if($cpassword == $password){

		$sql = "INSERT INTO testtable2 (id, name, email, password) VALUES (NULL, '$name', '$email', '$password');";


//send query not needed as it's included in if/else smt.
//$conn->query($sql);

 		if ($conn->query($sql) == TRUE) {


 			echo("<SCRIPT LANGUAGE='JavaScript'>
 				window.alert('Inserted Successfully');
 				window.location.href='login.php';
 				</SCRIPT>");
 		}else{

 			echo "Error";
 		}
 

}else{
	echo ("<SCRIPT LANGUAGE ='JavaScript'>
	window.alert('Try again - Passwords do not match.')
	window.location.href='signup.php';
	</SCRIPT>");
}

?>