<?php
$connection = mysql_connect("localhost", "root", "redeemer");
$db = mysql_select_db("farmer", $connection);
session_start();
$user=$_SESSION['login_user'];
$Type=$_SESSION['Type'];
$sql="select user from `LOGIN` where user='$user' and TYPE='$Type'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$login_session=$row['user'];
if(!isset($login_session))
{
 mysql_close($connection);
 header("Location: indexx.php");
}
?>
