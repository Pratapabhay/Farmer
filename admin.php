<?php
include('connection.php');
if($_SESSION['Type']!="Team")
header("location: myprofile.php");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>PRATAP</title>
		<meta name="description" content="Creative Link Effects: Subtle and modern effects for links or menu items" />
		<meta name="keywords" content="link effect, css transition, style, inspiration, css3, menu item, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<header>
				<h1>WELCOME:<i><?php echo $login_session; ?></i></h1>
				
			</header>
                        <section style="padding: 0px"class="color-1">
				<nav class="cl-effect-4">
					<a href="admin.php" data-hover="CLICK HERE"><span>HOME</span></a>
					<a href="index.php" data-hover="CLICK "><span>LOGOUT</span></a>
				</nav>
			</section>
<header>
<h1>EASY VEGGIE PORTAL <span> MANDI </span></h1>
</header>
			<section class="color-1">
				<nav class="cl-effect-4">
					<a href="order.php" data-hover="CLICK HERE"><span>PLACE YOUR ORDER</span></a>
					<a href="add_veggie.php" data-hover="CLICK HERE"><span>ADD VEGETABLES</span></a>
					<a href="alter_rates.php" data-hover="CLICK HERE"><span>MODIFY RATES</span></a>
					<a href="seeallorders.php" data-hover="CLICK HERE"><span>VIEW ORDERS</span></a>
					
					
				</nav>
			</section>
			
		</div><!-- /container -->
	</body>
</html>
