<?php 
include('connection.php');
session_start();
?>
<html>
<head>
	<title>AlterRates</title>
			<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>VEGGIES</title>
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
					<a href="admin.php" data-hover="CLICK HERE"><span>HOME</span></a>
					<a href="logout.php" data-hover="CLICK "><span>LOGOUT</span></a>
					
					
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
        echo "Connections are made successfully::";
      $selected = mysql_select_db("farmer", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM vegetables");
      ?>
<table border="2" style= "background-color:#D0D3FC; color: black; margin: 0 auto;" >
      
<caption>Today's Menu </caption>




<thead>
        <tr>
          <th>Vegetable</th>
          <th>Rate</th>
         <!-- <th>Room_type</th>
	  <th>Booked by</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
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
     <?php mysql_close($connector);
       ?>
    </body>
    </html>
	<h1>Alter rates of the vegetables available today</h1>
	<form action="insert1.php" method="post">
		Vegetable's Name: <input type="text" name="vegetable" required><br>
		New Rate: <input type="number" name="rate" required><br>
	        <!-- Room Type: <input type="text" name="room_type"><br> -->
		<input type="submit">
	</form>
	
</div>
</body>
</html>

