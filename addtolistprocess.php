<?php 

$host="localhost";
$username="root";
$password="";
$dbname="testphp";
$conn = new mysqli($host, $username, $password, $dbname);


$title = $_POST["title"];
$description = $_POST["description"];


$sql = "INSERT INTO `$newdb` (id, title, description) VALUES (NULL, '$title', '$description');";


	if($conn->query($sql)){

		echo "<SCRIPT LANGUAGE ='JavaScript'>
		window.location.href='dashboard.php';
		</SCRIPT>";
	}


?>
