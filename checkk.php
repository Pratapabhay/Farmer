<?php 
include('connection.php');
session_start();
?>
<html>
<head>
	<title>Order</title>
			<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Veggies</title>
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
<?php
      $username = "root";
      $password = "redeemer";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("farmer", $connector)
        or die("Unable to connect");
 $result = mysql_query("SELECT * FROM vegetables");
?>




				

<section style="padding: 0px"class="color-1">
				<nav class="cl-effect-4">
					<a href="myprofile.php" data-hover="CLICK HERE"><span>HOME</span></a>
					<a href="logout.php" data-hover="CLICK "><span>LOGOUT</span></a>
					
					
				</nav>
			</section>	
	
 <table border="2" style= "background-color:#D0D3FC; color: black; margin: 0 auto;" >
	<caption> Today's Menu: </caption>      
	<thead> 
        <tr>
          <th>Vegetable</th>
          <th>Rate(Rs)</th>
         <!-- <th>Room_type</th>
	  <th>Booked by</th> -->
        </tr>
      </thead>
      <tbody>
        <?php echo"<br>";
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['vegetable']}</td>
              <td>{$row['rate']}</td>
              
            </tr>\n";
          }
        ?>
      </tbody>
    </table>

	<h1>Place your order here:</h1>
	<form action="adduser.php" method="post">
		Vegetable: <input type="text" name="vegetable" required><br>
		Quantity (kg): <input type="number" name="qty" required><br>
	
                     
		<input type="submit">
	</form>
	
</div>
</body>
</html>

