<?php 
	session_start();
		
	?>
<html>
<head>
<?php 
if(isset($_SESSION['user']))
echo"<meta http-equiv=\"refresh\" content=\"0; url=./account.php\" />";
?>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php include'navigator.php';
?>
<div id="body">
		<div class="about">
		<h1>login</h1>
</div>
<div class="header">
<form action="log-in.php" method="post" id="reg">
<?php
if(isset($_POST['sign-in']))
 {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','data');
	$key=mysqli_query($con,"SELECT password,ID FROM info WHERE email='$email'");
	$row=mysqli_fetch_array($key);
	$id=$row['ID'];
	$_SESSION['user']=$id;
	if(strstr($row['password'],$password))
		echo'Success!!!<br>Please <a href="account.php">Click here</a> to continue<br></form></div></div>';
	else{	
		
		?>
		
		<font color="red">Invalid Email/Password</font><br>
		Email<input type="email" name="email" required><br>
		Password<input type="password" name="password" required><br>
		<input type="submit" name="sign-in" value="Sign-in"><br>
		</form>
		</div>
		</div>
<?php		}
}
else
{
?>
		Email<input type="text" name="email" required><br>
		Password<input type="password" name="password" required><br>
		<input type="submit" name="sign-in" value="Sign-in"><br>
		</form>
		</div>
		</div>
<?php }
include'footer.php';
?>
</body>
</html>