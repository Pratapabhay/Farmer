<?php 
include('connection.php');
session_start();
?>
<html>
<head>
	<title>AllOrders</title>
			<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>AllOrders</title>
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
				
				
<?php
session_start();
  	$user1= $login_session;
 echo "You are logged in as :" . "$user1";

  echo "<br><br>"; ?>
</header>
<section style="padding: 0px"class="color-1">
				<nav class="cl-effect-4">
					<a href="admin.php" data-hover="CLICK HERE"><span>HOME</span></a>
					<a href="gallery.html" data-hover="CLICK "><span>LOGOUT</span></a>
					
					
				</nav>
			</section>	
	<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
	
      $username = "root";
      $password = "redeemer";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
       // echo "Connections are made successfully::  ";
      $selected = mysql_select_db("farmer", $connector)
        or die("Unable to connect"); 	
	$sql1= "select count(*) as count from orders";
	$res1=mysql_query($sql1) or die("counterror");
	$cnt1=mysql_result($res1,0,0);
	if($cnt1==0)
	{ echo "No pending orders<br>";
		

         } 
else
	{ echo ' <form action="viewcart.php" method="post">';
	$sql2="select distinct (user) as user from orders";
	$res2=mysql_query($sql2) or die("distinct error");
	

$td = '';
	$th = '';
while ($row = mysql_fetch_assoc($res2) ) {
echo '<p>' . '</p>';

$user= $row['user'];
  
$sql4="select fname,lname,address,contact from `USER_DETAILS` where user='$user'";
$res4=mysql_query($sql4);
$cnt4=mysql_fetch_array($res4);
$fname=$cnt4['fname']; 
$lname=$cnt4['lname'];
$address=$cnt4['address'];
$contact=$cnt4['contact'];


	$sql3="select vegetable, qty from orders where user='$user'";
	$res3=mysql_query($sql3) or die("selection error");
	//echo '<td style="text-align:center;">' . "Order of" . $fname . " " . $lname . '</td>';
	//echo "<td align=center>$fname $lname</td>";
?>
<?php echo "<br>";
echo "<p align=center>Order of $fname $lname </p> "; 
echo "<p align=center>To be delivered at: $address </p> ";
echo "<p align=center>Contact number : $contact </p> ";
 echo "<input name='checked[]' type='checkbox'  style=vertical-align: middle; margin: 0px;  value=$user />Delivered";
echo "</br>";
    
    
?>
<table border="1" style= "background-color:#D0D3FC; color: black; margin: 5 auto;" >

<!--<caption>Order Of <?php echo $fname," ", $lname;?> </caption> -->      
<thead>
	
        <tr>
          <th>Vegetable</th>
          <th>Quantity in kg</th>
           
     </tr>
      </thead>
      <tbody>



<?php while ($pickresults=mysql_fetch_assoc($res3) )
{
$veg1=$pickresults['vegetable'];
$qty1=$pickresults['qty'];

 
 echo
            "<tr>
              <td>{$veg1}</td>
              <td>{$qty1}</td>
              
            </tr>\n";



} ?>

 <!--<input style="text-align:center; vertical-align:middle" type="checkbox" name="checked[]" value= $user  id= $user ;-->
	


    
   <!-- <div> Delivered: <input style="text-align:center; vertical-align:middle" type="checkbox" name="checked[]"value= $user id=$user> </div>-->



</tbody>
</table>
<?php
	
}?>


<input type="submit" style="vertical-align: middle; margin: 0px;" name="submit" value="submit" />
</form>


<?php
$sql3="select vegetable, sum(qty) as qty from orders group by vegetable";
	$res3=mysql_query($sql3) or die("selection error");
 echo "<br>";
?>

<table border="1" style= "background-color:#D0D3FC; color: black; margin: 5 auto;" >
<caption>Total Order</caption>      
<thead>
        <tr>
          <th>Vegetable</th>
          <th>Quantity in kg</th>
           
     </tr>
      </thead>
      <tbody>



<?php while ($pickresults=mysql_fetch_assoc($res3) )
{
$veg1=$pickresults['vegetable'];
$qty1=$pickresults['qty'];
echo '<p>' . '</p>';
 echo
            "<tr>
              <td>{$veg1}</td>
              <td>{$qty1}</td>
              
            </tr>\n";

}


?></tbody>
</table>




<?php


}

	 mysql_close($connector);
       ?> 
    </body>
    </html>
	
	
</div>
</body>
</html>

