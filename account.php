<?php
	
	session_start();
	if(isset($_SESSION['user']))
	{
	?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php include'navigator1.php';
?>
<div id="body">
		<div class="about">
			<h1>Account</h1>
	</div>
	<div class="header">
	<?php 
		$id=$_SESSION['user'];
		$con=mysqli_connect('localhost','root','','data');		
		$bal=mysqli_query($con,"SELECT balance,firstname FROM info WHERE ID='$id'");
		$bal1=mysqli_fetch_array($bal);
		echo '<h2>Welcome '.$bal1['firstname'].'<br><font style="italic">How are you today?<br>Would you like to Deposit money to your account?<br><a href="deposit.php">Click Here</a></font> </h2><div id="bal">Your current Balance:$'.$bal1['balance'].'</div></div>';
		include'history.php';
		?>
</div>		
<?php	
	include'footer.php';
	}
	else
	echo"Got you novice hacker :P!!Please login";
	
?>
</body>
</html>
