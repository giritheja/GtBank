<?php
	session_start();
	?>
<html>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php
	if(isset($_SESSION['user']))
	include'navigator1.php';
	else
	include'navigator.php';
	?>
	<div id="body">
		<div class="header">
			<div>
				<ul>
					<li><img src="images/discuss.jpg" alt="" /></li>	
					<li><img src="images/flags.jpg" alt="" /></li>
					<li><img src="images/graph.jpg" alt="" /></li>		
				</ul>		
				<div>
					<h3><span>Welcome to GTB</h3>	
					<p>Your ultimate destination for all your Online-Financial needs.<br>
					   At the speed of want.Millions of people around the world use <br>
					   GTB for one reason: it is simple. Just an email and password<br>
					   will get you through checkout before you can reach for your wallet</p>		
				</div>
			</div>
		</div>
		<div class="body">
			<div class="section">
				<a href="fb.php">
				<img src="images/gears.jpg" alt="" />				
				Contact Us
				</a>			
			</div>	
			<div class="article">
				<img src="images/graph2.jpg" alt="" />		
				<h4>Your money's gateway to the world!</h4>	
				<p>Get your money where it needs to go quickly, conveniently, and securely. Shop or sell online, send or receive money wherever you are! Hop in now!</p>
				<a href="sign-up.php" id="sbutton">Sign Up Now</a>
			</div>
			<div class="section">
				<a href="faq.php"><img src="images/globe.jpg" alt="" />about</a>			
			</div>		
		</div>
		<?php
			include'footer.php';
			?>
</body>
</html>