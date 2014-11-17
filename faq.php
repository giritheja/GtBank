<?php 
	session_start();
	?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php	if(isset($_SESSION['user'])) 
		include'navigator1.php';
		else
		include'navigator.php';
?>
<div id="body">
		<div class="about">
			<h1>About</h1>

<div>
<p>Gtb is the leading global online payment platform that specializes in e-commerce processing, corporate disbursements, and remittances for individuals and businesses around the world. The e-wallet platform provides Gtb members worldwide with convenient and flexible loading and withdrawal options, such as localized bank transfers, global bank wires, credit/debit card, checks, prepaid cards, among others.</p>
</div>
</div>
</div>
<?php include'footer.php';
?>
</body>
</html>