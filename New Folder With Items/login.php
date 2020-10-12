<meta charset="utf-8">
<?php
include "../inc/sql.php"
?>
<?php
if(isset($_POST['userSubmit'])){

	if($_POST['vcode'] == $_COOKIE['vcode']){
		$userName=$_POST['userName'];
		$userPass=$_POST['userPass'];
		$sql = "select * from player where userName='".$userName."' and password = '".md5($userPass)."'";
		if($results=mysqli_query($link,$sql)){
			if(mysqli_num_rows($results)>0){
				setcookie('name',$userName,time()+3600*24,"/");
				echo "<h4 style='text-align:center;'>Login Successful，<a href='../index.php'>Go Back to Home Page</a></h4>";
			}else{
				echo "User Name or Password Incorrect，<a href='./login.php'>Ple Try to Log Again</a>";
			}
		}else{
			die(mysqli_error($link));
		}
	}else{
		echo "Verification Code Incorrect,<a href='./login.php'>Ple Try to Log Again</a>";
	}
}else{
	$html=<<<HTML
	<form
		method="post"
	>
	User Name: <input type="text" name="userName"><br />
	Password: <input type="password" name="userPass"><br />
	Verification Code<input type="text" name="vcode"><img src="./vcode/vCode.php">
	<input type="submit" name="userSubmit" value="LogIn"><hr/>
	<h4 style='text-align:center;'><a href="../index.php">Home Page</a></h4>
	</form>

HTML;
echo $html;
}
?>


<?php
	mysqli_close($link);
?>