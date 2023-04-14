<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST" class="fm">
	<h2>user login</h2>
	username:<br><input type="text" name="un" placeholder="enter your username"><br><br>
	password:<br><input type="password" name="pw" placeholder="enter your password"><br><br>
	tittle:<br><input type="text" name="tit" placeholder="enter you"><br><br>
	<button type="submit" name="save">login</button><br>you need to create an account<a href="sign up.php">create it here</a>
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','xyz');
if (isset($_POST['save'])){
	$un=$_POST['un'];
	$pw=$_POST['pw'];
	$tit=$_POST['tit'];

	$sel=mysqli_query($con,"SELECT * FROM user WHERE username='$un' AND password='$pw' AND tittle='$tit'");
	if (mysqli_num_rows($sel) < 1){
		echo "incorect data";

	}
else{
	while ($row=mysli_fetch_assoc($sel)) {
		// code...
		$tittle=$row['tittle'];
		if($tittle=="manager"){
			echo header("location:welcome.php");
		}
		if ($tittle=="supervisor"){
			echo header("location:workers reg.php");
		}
	}
}


}




?>