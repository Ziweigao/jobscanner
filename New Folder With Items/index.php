<?php
include "./inc/sql.php"
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align:center;">Google Dinosaur</a></h1>
<?php
if(isset($_COOKIE['name'])){

	echo "<h3 style='text-align:center;'>Welcome ".$_COOKIE['name']."!!</h3><br/>";
	echo "<h3 style='text-align:center;color:red;'><a href='./main-project' >Please Enjoy the game!!!</a></h3>";
	echo "<hr/><h4 style='text-align:center;'><a href='./user/logout.php' style='text-align:center;'>Log Out</a></h4>";
}else{
	echo "<h3 style='text-align:center;'><a href='./user/login.php' style='text-align:center;'>Ple LogIn</a></h3>";
	echo "<h3 style='text-align:center;'>OR</h3>";
	echo "<h3 style='text-align:center;'><a href='./user/register.php' style='text-align:center;'>Ple Register</h3></a>";
}


mysqli_close($link);
?>
</body>
</html>
