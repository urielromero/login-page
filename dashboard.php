<?php

session_start();
 if(!isset($_SESSION['user']))
 {
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('please sign in')
    window.location.href='signin.php';
    </SCRIPT>");
 }

?>


	<H1> Hello, <?php echo ($_SESSION['user']); ?></H1>
	<H1 style="color:darkblue">WELCOME TO YOUR TO-DO LIST</H1>





<?php 

$host="localhost";
$username="root";
$password="";
$dbname="testphp";


$conn = new mysqli($host, $username, $password, $dbname);


	$result=mysqli_query($conn, "SELECT * FROM `$newdb`");

	while($row=mysqli_fetch_assoc($result)){

		echo "<br>";
		echo $row['title'];
		echo "<br>";
		echo "   ";
		echo $row['description'];

	}

?>



<h2>Add Task</h2>
	<FORM method="post" action="addtolistprocess.php">
		<br>
		<input type="text" name="title" placeholder="Title">
		<br>
		<br>
		<input type="text" name="description" placeholder="Add description">
		<br>
		<br>
		<input type="submit">
	</FORM>


























