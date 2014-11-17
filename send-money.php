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

<?php
		$con=mysqli_connect('localhost','root','','data');
		$to=$_POST['receiver'];
		$amnt=$_POST['amount'];
		$id=$_SESSION['user'];
		$bal=mysqli_query($con,"SELECT balance,ID FROM info WHERE email='$to'");
		$bal1=mysqli_fetch_array($bal);
		$sbal=mysqli_query($con,"SELECT balance,email FROM info WHERE ID='$id'");
		$sbal1=mysqli_fetch_array($sbal);
		$em=$sbal1['balance'] - $amnt;
		$sm=$bal1['balance'];	
		$from=$sbal1['email'];
			if(($sm)&&($em>0)&&(!strstr($to,$from)&&($amnt>0)))
			{
				$sm=$sm+$amnt;
				mysqli_query($con,"UPDATE info SET balance='$sm' WHERE email='$to'");
				mysqli_query($con,"UPDATE info SET balance='$em' WHERE ID='$id'");
				$rid=$bal1['ID'];
				$con1=mysqli_connect('localhost','root','','history');
				$d=date('Y-m-d');
				mysqli_query($con1,"INSERT INTO h$id(date,sender,amount) VALUES('$d','$to','-$amnt')");
				mysqli_query($con1,"INSERT INTO h$rid(date,sender,amount) VALUES('$d','$from','$amnt')");
				echo"<h2 color="green">Success!!!<br>Please <a href=\"send.php?id=$id&amp\">Click Here </a>to send again</h2> ";
			}
			else{
				?>
	<form id="send-money" action="send-money.php" method="post">
	<font color="red"><p>Invalid amount/email</p></font>
	<p>To(Email)</p><input type="email" name="receiver"><br>
	<p>Amount(in $)</p><input type="number" name="amount"><br>
	<p><input type="submit" name="send" value="Send"/>
	
	</form>
	
<?php }
	echo"</div></div>";
	include'footer.php';
	}
	else
	echo"Gotcha novice hacker :P!!Please login";
	?>
</body>
</html>