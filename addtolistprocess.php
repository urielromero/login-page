<?php 

session_start();


$host="localhost";
$username="root";
$password="";
$dbname="testphp";
$conn = new mysqli($host, $username, $password, $dbname);


$title = $_POST["title"];
$description = $_POST["description"];


// $test="user";
// $test2="name";
// $table=$test.$test2;



$mytodolist=$_SESSION['mynewtable2'];


$sql = "INSERT INTO `$mytodolist` (id, title, description) VALUES (NULL, '$title', '$description');";


	if($conn->query($sql)){

		echo "<SCRIPT LANGUAGE ='JavaScript'>
		window.location.href='dashboard.php';
		</SCRIPT>";
	}


?>
