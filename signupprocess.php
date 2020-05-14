
<?php
session_start();

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


//table name per user
$mytodolist=$name.$email;
$_SESSION['mytable']= $mytodolist;




//verify password mactches 
if($cpassword == $password){

		$sql = "INSERT INTO testtable2 (id, name, email, password) VALUES (NULL, '$name', '$email', '$password');";


		$conn->query($sql);

//send query not needed as it's included in if/else smt.
//$conn->query($sql);





			// sql to create table
			$sql2 = "CREATE TABLE `$mytodolist` (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			title VARCHAR(100) NOT NULL,
			description VARCHAR(100) NOT NULL
			)";


 		if ($conn->query($sql2) == TRUE) {


 			echo("<SCRIPT LANGUAGE='JavaScript'>
 				window.alert('Registration Successful');
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