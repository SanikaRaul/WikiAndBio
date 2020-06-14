
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Sign Up Form</h2></center>
		<form action="register.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
			
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		</div>
<?php
error_reporting(0);

$server="localhost";
$username="root";
$pass="";
$datatbase="logindb";
$connect=mysqli_connect($server,$username,$pass,$datatbase);

$user = $_POST['user'];
$pass = $_POST['pass'];


$query="insert into userinfotb1(username,password) values('$user','$pass')";

$r=mysqli_query($connect,$query);

if($r)
{
echo " your data is successfully inserted";

}
else
{
echo "error";
}


?>







</body>
</html>