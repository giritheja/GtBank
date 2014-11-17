	<link rel="stylesheet" type="text/css" href="history1.css">
	<?php
		$con1=mysqli_connect('localhost','root','','history');
		$id=$_SESSION['user'];
		$q="SELECT * FROM h$id ORDER BY PID DESC";
		$dat=mysqli_query($con1,$q);
		echo'<p align="center">Your recent transactions:</p><div class="history"><table border="5"><tr id="row"><td>Date</td><td>Sender/Receiver/Type</td><td>Amount</td></tr>';
		while($data=mysqli_fetch_array($dat))
		{
		echo'<tr id="row"><td>'.$data['date']."</td><td>".$data['sender']."</td><td>";
		if($data['amount']<0)
			echo'<font color="red">'.$data['amount']."$</font></td></tr>";
		else
			echo'<font color="green">'.$data['amount']."$</font></td></tr>";
		}
		
		echo"</table></div>";
		?>
	