<?php
 include('connection.php'); 
?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>FiveStar</title>
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
				<h1>WELCOME:<i><?php  echo $login_session; ?></i></h1>
				
</header>
<section style="padding: 0px"class="color-1">
				<nav class="cl-effect-4">
					
					<?php
include('connection.php');

session_start();

$db = mysql_connect("localhost", "root", "redeemer");
mysql_select_db("farmer",$db);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vegetable = ($_POST['vegetable']);
    $qty = ($_POST['qty']);
    }
$user =  $login_session;
echo"<br>";
echo "Dear ";
echo  $login_session;
echo ",";

$sql1= "select count(vegetable) as count from `vegetables` where vegetable = '$vegetable'";
$res1= mysql_query($sql1) ;
$fet=mysql_fetch_array($res1);
if($fet['count']!=1)
{                         echo' <html><head><br><br><br><br><a href="checkk.php" data-hover="CLICK "><span>BACK</span></a>	
				<br><br><br><br><a href="index.php" data-hover="CLICK "><span>LOGOUT</span></a>	</nav></head></html>';
			die (" This Vegetable is not availible. Enter only the vegetables listed in the table ") ;}
$sql2= "select count(vegetable) as count from orders where ((vegetable='$vegetable') AND (user='$user'))";
$res2= mysql_query($sql2);
$fet= mysql_fetch_array($res2);
//echo $fet['count'];
//echo ($count) or die("aftererror");
if ($fet['count']!=0)
   {
     echo "<br><br><br>You have already ordered this vegetable<br><br><br>To alter its quantity go to previous page and modify your order<br><br><br>";
    }
else
{ $sql3= "insert into orders values('$user', '$vegetable', '$qty')";
  $res3= mysql_query($sql3) or die("insertion error");
  echo " Your Order has been placed successfully, to add more go to previous page<br><br>";
}
?> 
					
				<br><br><br><br><a href="checkk.php" data-hover="CLICK "><span>BACK</span></a>	
				<br><br><br><br><a href="index.php" data-hover="CLICK "><span>LOGOUT</span></a>	</nav>
			</section>	
	
			<section class="color-1">
				
			</section>
			
		</div><!-- /container -->
	</body>
</html>

</body>
</html>

  



























