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


    $DataSelect = "Select Username from Conta where Conta_Id = '".$_SESSION["UserId"]."'";
    $Result = mysqli_query($DBOpen, $DataSelect);
    $User=mysqli_fetch_array($Result);
    $userC = $User["Username"];
    header('location: DashBoard.php');

?>