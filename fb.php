<?php
	session_start();
	?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php 
	if(isset($_SESSION['user']))
	{include'navigator1.php';
	}
	else
	include'navigator.php';
	?>
<div id="body">
		<div class="about">
			<h1>Contact us</h1>
	</div>
	<div class="header">
	<h2>Worldwide<br>
	
	1234 By GTB, XY 12345<br>
	Tel: + 457-380-1654 000<br>
	Toll Free: + 257-301-9417 000<br>
	Email: admin@gtb.com<br>
	</h2>
	</div>
	<?php
	include'footer.php';
	?>
</body>
</html>