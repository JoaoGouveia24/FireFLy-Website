<?php 

session_start();

$DBOpen = mysqli_connect('localhost','root','');
if(!$DBOpen){
echo "ERROR: Failed to connect!";
exit;
}

$DBChoosers = mysqli_select_db($DBOpen,"FireFly");
if(!$DBChoosers){
echo "ERROR: Failed to connect!<br>Database not found!";
exit;
}


 





?>