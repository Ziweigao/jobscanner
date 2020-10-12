<meta charset="utf-8">
<?php
if(setcookie('name',$_COOKIE['name'],time()-3600,"/")){
	echo "<h3 style='text-align:center;'>Logout success !<a href='../index.php'>Back to Home Page</a></h3>";
}else{
	die("Error!");
}


?>