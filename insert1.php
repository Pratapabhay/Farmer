<?php 
include('connection.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
//$ROLL_NO = $FNAME = $LNAME = $FATHERNAME = $MOTHERNAME = $ADDRESS =   $PROG_STUDY = $STREAM = $ENROLLEDYEAR = $CURRENTYEAR = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   $vegetable = test_input($_POST["vegetable"]);
   $rate = test_input($_POST["rate"]);
   //$room_type = test_input($_POST["room_type"]);
   


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

$sql = "update `vegetables` set rate = '{$rate}' where vegetable = '{$vegetable}'";
//if($conn->query($sql) === TRUE) {echo "Rates modified :D";} else {echo "re-enter vegetable's name, matching exactly that in the table shown");}
if ($conn->query($sql) === TRUE) {
   echo "Rate modified successfully";} 
else{echo "re-enter vegetable's name, matching exactly that in the table shown";}

$conn->close();
?> 
</body>
</html>
