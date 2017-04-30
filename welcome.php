<?php 
session_start();
   include("connection.php");

   if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
  
   // if(is_null($_SESSION['username'])){
   // 	header("location: login.php");
   // }else{
   // 	header("location: welcome.php");
   // }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>HELLO <?php echo $_SESSION['username']; ?></h1>
  <button type="button" ><a href="logout.php"> Log Out </a></button>
</body>
</html>