<?php
	
	session_start();
	if(isset($_SESSION['user']))
	{
	?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php include'navigator1.php';
	$id=$_SESSION['user'];
?>
<div id="body">
		<div class="about">
			<h1>Deposit</h1>
	</div>
	<div class="header">
	<?php
		function deposit()
		{?>
		<form action="deposit.php" method="POST" id="reg">
		Credit/Debit Card No<input type="text" pattern="[0-9]*" name="card" required>
		CVV/CVV2 No<input type="password" pattern="[0-9]*" name="cvv" required>
		Amount($)<input type="number" name="amount" required>
		<input type="submit" name="submit" value="Submit">
		</form>
		</div>
		<?php
		return;
		}
		if(isset($_POST['submit']))
		{	$card=$_POST['card'];
			$cvv=$_POST['cvv'];
			$amount=$_POST['amount'];
			if((strlen($card)==12)&&(strlen($cvv)==3)&&$amount>0)
			{	$con=mysqli_connect('localhost','root','','data');
				$bal=mysqli_query($con,"SELECT balance FROM info WHERE ID='$id'");
				$bal1=mysqli_fetch_array($bal);
				$balance=$bal1['balance'];
				$con1=mysqli_connect('localhost','root','','history');
				$d=date('Y-m-d');
				$q="INSERT INTO h$id(date,sender,amount) VALUES('$d','Deposit','$amount')";
				mysqli_query($con1,$q);
				$balance=$balance+$amount;
				mysqli_query($con,"UPDATE info SET balance='$balance' WHERE ID='$id'");
				echo"<h2>Success!! Your deposit has been received.</h2>";
			}
		else{
				echo"<h2>Invalid Card No/Cvv no/Amount</h2>";
				deposit();
		}
		}
		else{
			deposit();
		}
		}
		else
		{echo"Gotcha!!! novice hacker.Please login!";
		}
		?>
		</div>
		</body>
		</html>