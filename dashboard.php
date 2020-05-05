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

<H1> Hello <?php echo ($_SESSION['user']); ?></H1>
<H1 style="color:gray">WELCOME TO YOURE HOME PAGE</H1>