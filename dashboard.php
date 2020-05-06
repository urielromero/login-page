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
$conn = mysqli_connect($host, $username, $password, $dbname);

	$result=mysqli_query($conn, "SELECT * FROM todolist");

	while($row=mysqli_fetch_assoc($result)){

		echo "<br>";
		echo $row['title'];
		echo "<br>";
		echo "   ";
		echo $row['description'];
		
	}

?>