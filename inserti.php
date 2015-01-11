<!DOCTYPE HTML>
<html>

<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Home Page</title>
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
<header>
				<h1>WELCOME</h1>
				
</header>
<section style="padding: 0px"class="color-1">
				<nav class="cl-effect-4">
					<a href="admin.php" data-hover="CLICK HERE"><span>HOME</span></a>
					<a href="gallery.html" data-hover="CLICK "><span>LOGOUT</span></a>
					
					
				</nav>
			</section>





<head>
</head>
<body>

<?php
// define variables and set to empty values
$ROLL_NO = $FNAME = $LNAME = $FATHERNAME = $MOTHERNAME = $ADDRESS =   $PROG_STUDY = $STREAM = $ENROLLEDYEAR = $CURRENTYEAR = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $vegetable = test_input($_POST["vegetable"]);
   $rate = test_input($_POST["rate"]);


}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<a href=admin.php">Home</a> 
<?php
$servername ="localhost";
$username ="root";
$password ="redeemer";
$dbname ="farmer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `vegetables` (`vegetable`,`rate`)
VALUES('{$vegetable}','{$rate}')";

if ($conn->query($sql) === TRUE) {
    echo "New record entered successfully!";
} else { echo "This vegetable already exists";}

$conn->close();
?> 
</body>



	
		</div><!-- /container -->
	</body>
</html>
</html>
