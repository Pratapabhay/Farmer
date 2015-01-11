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
		<title>DeleteVeggies</title>
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
	if($fet1['count']==0)
	{ echo "Your order doesn't contain this vegetable";
	}
	 

	else
	{$sql2="select qty from orders where (user='$user') and vegetable='$vegetable'";
	$res2= mysqli_query($conn,$sql2) or die("qtyerror");
	if($res2!=$qty)
		{ echo "Entered quantity doesn't match to that in your order";
		}
	else{
		$sql3="delete from orders where user='$user' and vegetable='$vegetable'";
		$res3=mysqli_query($conn,$sql3) or die("deletionerror");
		echo "Your order is modified successfully";
		}
	}		
	//$sql2= "select count(qty) as count1 from vegetables where qty='$qty' and user='$user'";
	//$res2= mysqli_query($conn,$sql2) or die("count2error");
	//$fet2= mysqli_fetch_array($res2);
	 //echo $fet['count'];
		
 }
   
//$fdate1 = str_replace('/', '-', $fdate);
//$fdate2 = date('Y-m-d', strtotime($date1));

/*if($fet1['count']== 1 && $fet['count1']==1 )
{//echo "hi";

$sql = "delete from orders where user= '$user' and vegetable= '$vegetable'"; 
$res = mysqli_query($conn,$sql) or die("deletionerror");
echo"<br><br><br>Your order is successfully modified";
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

/*else if($fet1['count']==1)
{

$sql2 ="UPDATE orders SET qty='{$qty}' WHERE ((user='{$user}') and (vegetable='{$vegetable}'))";
$res2 = mysqli_query($conn,$sql2) or die("Update error1"); echo " <br><br><br>Your Order is successfully updated <br><br>";}
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
