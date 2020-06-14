
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit">Log Out</button>	
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

$user = $_POST['username'];
$pass = $_POST['password'];


$query="insert into userdata(username,password) values('$user','$pass')";

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