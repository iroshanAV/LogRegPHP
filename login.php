<?php 
session_start();

include("connection.php");
 ?>


    <?php 
     if(isset($_POST['login'])){
        $username =mysqli_real_escape_string($con, $_POST['username']);
        $pass = mysqli_real_escape_string($con,$_POST['pass']);

        $user = "select * from users where username='$username' AND password='$pass'";
        $run_query = mysqli_query($con, $user);
         $check_user = mysqli_num_rows($run_query);

         if($check_user == 0){
            echo "<script>alert('Your credentials may be wrong');</script>";
         }else{
            $_SESSION['username']= $username;
            echo "<script>window.open('welcome.php', '_self');</script>";
         }
     }
     ?>

<!DOCTYPE html>
<html>
<head>
	<title>haha</title>
</head>
<body>
<h1> Login </h1>
    <form action="login.php" method="POST">    		
    		<input type="text" name="username" placeholder="Enter Username">
    		<input type="password" name="pass" placeholder="Enter Password">
    		<input type="submit" name="login" value="login">
    </form>


</body>
</html>
