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
			<h1>Send Money</h1>
</div>
<div class="header">
<form id="send-money" action="send-money.php" method="post">
	<p>To(Email)</p><input type="email" name="receiver"><br>
	<p>Amount(in $)</p><input type="number" name="amount"><br>
	<input type="submit" name="send" value="Send"/>
	</form>
	</div>
	</div>
<?php
	include'footer.php';
	}
	else
	echo"Got you novice hacker :P!!Please login";
	?>
</body>
</html>	