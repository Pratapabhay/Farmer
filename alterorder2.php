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
		<title>AddVeggies</title>
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
				<h1>WELCOME:<i><?php echo $login_session; ?></i></h1>
				
				
</header>
<section style="padding: 0px"class="color-1">
				<nav class="cl-effect-4">
					
					<?php

session_start();

// define variables and set to empty values
$ROLL_NO = $FNAME = $LNAME = $FATHERNAME = $MOTHERNAME = $ADDRESS =   $PROG_STUDY = $STREAM = $ENROLLEDYEAR = $CURRENTYEAR = "";

$servername ="localhost";
$username ="root";
$password ="redeemer";
$dbname ="farmer";
$user = $login_session;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   
   $vegetable = ($_POST["vegetable"]);
   $qty = ($_POST["qty"]); 
	$sql1= "select count(vegetable) as count from orders where ((user='$user') and (vegetable='$vegetable'))";
	$res1= mysqli_query($conn,$sql1) or die("counterror");
	$fet1=mysqli_fetch_array($res1);
	$sql2= "select count(vegetable) as count1 from vegetables where vegetable='$vegetable'";
	$res2= mysqli_query($conn,$sql2) or die("count2error");
	$fet2= mysqli_fetch_array($res2);
	 //echo $fet['count'];
		
 }
   
//$fdate1 = str_replace('/', '-', $fdate);
//$fdate2 = date('Y-m-d', strtotime($date1));
if($fet2['count1']==1)
{
if($fet1['count']== 0)
{//echo "hi";

$sql = "INSERT INTO orders VALUES('$user','$vegetable','$qty')";
$res = mysqli_query($conn,$sql) or die("insertionerror");
echo"<br><br><br> New Vegetable is successfully added to your order";
}
/*
$temp = "select `booking_id` ,`room_no` from room where room_type = '{$room_type}'";
$res1 = mysqli_query($conn,$temp) or die("error res2");
$num=0;
while($arr=mysqli_fetch_array($res1) or die("Fetch error"))
{  
if($arr["booking_id"]==-1){
	
	 $num=$arr["room_no"];
	break;
	
 }
	  
}*/

else if($fet1['count']==1)
{

$sql2 ="UPDATE orders SET qty='{$qty}' WHERE ((user='{$user}') and (vegetable='{$vegetable}'))";
$res2 = mysqli_query($conn,$sql2) or die("Update error1"); echo " <br><br><br>Your Order is successfully updated <br><br>";}
}
else if($fet2['count1']==0)
{
echo"<br><br><br>Please enter only the vegetable which is available <br><br>";
}
else
{
echo "The menu has repeated entries! Kindly report it to your service provider ASAP!";
}
/*$sql2 ="UPDATE room SET fdate='{$fdate}' WHERE room_no='{$num}'";
$res2 = mysqli_query($conn,$sql2) or die("Update error2");
$sql2 ="UPDATE room SET ldate='{$ldate}' WHERE room_no='{$num}'";
$res2 = mysqli_query($conn,$sql2) or die("Update error3");
$sql2 ="UPDATE user SET room_no='{$num}' WHERE  booking_id='{$booking_id}'";
$res2 = mysqli_query($conn,$sql2) or die("Update error4");*/

//echo " <br><br><br>Your Order is successfully updated <br><br>";



//}
?> 
					
				<br><br><br><br><a href="rad.php" data-hover="CLICK "><span>BACK</span></a>	
				<br><br><br><br><a href="logout.php" data-hover="CLICK "><span>LOGOUT</span></a>	
				</nav>
			</section>	
	
			<section class="color-1">
				
			</section>
			
		</div><!-- /container -->
	</body>
</html>

</body>
</html>
