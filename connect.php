<?php
$connection = mysql_connect("localhost", "root", "redeemer");
$db = mysql_select_db("Farmer", $connection);
if($connection!=TRUE)
{echo "yupieesss";}
>?
