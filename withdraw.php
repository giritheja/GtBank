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
		<h1>Withdraw</h1>
		</div>
		<div class="header">
		<?php 
			if(isset($_POST['submit']))
		{	$bank=$_POST['bank'];
			$account=$_POST['account'];
			$amount=$_POST['amount'];
			$con=mysqli_connect('localhost','root','','data');
			$bal=mysqli_query($con,"SELECT balance FROM info WHERE ID='$id'");
			$bal1=mysqli_fetch_array($bal);
			$balance=$bal1['balance'];
			if((strlen($account)==11)&&($balance-$amount>=0)&&($amount>0))
			{$con1=mysqli_connect('localhost','root','','history');
			 $d=date('Y-m-d');
			 $q="INSERT INTO h$id(date,sender,amount) VALUES('$d','Withdraw','-$amount')";
			 $result=$balance-$amount;
			 mysqli_query($con,"UPDATE info SET balance='$result' WHERE ID='$id'");
			 mysqli_query($con1,$q);
			
		?>
		<h2>We have received your request.<br>We will update it within a week or two</h2>
		</div>
		
		<?php
			}
			else{
			echo'<font color="red"><h2>Invalid A/c number/amount</h2></font>';
			?>
			<form name="withdraw" action="withdraw.php" method="post" id="reg">
		Bank<input type="text" name="bank" required>
		A/c no<input type="text" name="account" required>
		Amount($)<input type="int" name="amount" required>
		<input type="submit" name="submit" value="Submit">
		</div>
		<?php
		}
		}
		else{
		?>
		<form name="withdraw" action="withdraw.php" method="post" id="reg">
		Bank<input type="text" name="bank" required>
		A/c no<input type="text" name="account" required>
		Amount($)<input type="number" name="amount" required>
		<input type="submit" name="submit" value="Submit">
		</div>
	<?php }
	include'footer.php';
	}
	else
	echo"Gotcha! novice hacker :P!!Please login";
	?>
	</body>
	</html>