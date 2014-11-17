<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php include'navigator.php';
?>
<div id="body">
		<div class="about">
		<h1>Logout</h1>
		</div>
		<div class="header">
		<h2>You have been successfully Looged out!<br>Please <a href="log-in.php">Click here</a> to Login.</h2>
</div>
</div>
<?php 
	session_destroy();
	include'footer.php';
	}
	else
	echo"Got you novice hacker :P!!Please login";
	?>
</body>
</html>		