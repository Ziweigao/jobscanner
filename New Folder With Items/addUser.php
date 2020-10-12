<meta charset="utf-8">
<?php
include "../inc/sql.php";
?>
<?php
if(isset($_POST['userSubmit'])){
	$userName = $_POST['userName'];
	$userPass1 = $_POST['userPass1'];
	$userPass2 = $_POST['userPass2'];

	
	if(isset($userName)&& isset($userPass1) && isset($userPass2) && ($userPass1===$userPass2) ){
		$sql = "insert into player(userName,password) values('".$userName."','".md5($userPass1)."')";
		if(!($results = mysqli_query($link,$sql))){
			
			die(mysqli_error($link) );
		}else{
			echo "<h3 style='text-align:center;'>Registered Successfully， <a href='../index.php'>Back to Home Page</a><hr/></h3>";
			setcookie("name",$userName,time()-3600,"/");
		}
	
	}else{
		echo"<h3 style='text-align:center;'>Passwords different<a href='./register.php'>Please try again</a></h3>";
	}
}else{
	header("Location:./register.php");    
}
?>

<?php
	mysqli_close($link);
?>