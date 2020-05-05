<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";
$conn = mysqli_connect($host, $username, $password, $dbname);

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];






//perform a quary on testtable2
$result = mysqli_query ($conn, "SELECT * FROM testtable2");


 
		// go through db/$results
   		while ($row = mysqli_fetch_assoc($result)){

       		

        	if($email==$row['email'] && $password==$row['password']){

        		// echo "Welcome ";
        		// echo $row['name'];

        		session_start();
 					$_SESSION['user']=$row['name'];

				 	echo ("<SCRIPT LANGUAGE='JavaScript'>
    				//window.alert('login')
    				window.location.href='dashboard.php';
    				</SCRIPT>");
        	}

    	}

 ?>