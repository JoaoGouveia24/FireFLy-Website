<?php 


if(isset($_GET['deleteid'])){

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


    $id = $_GET['deleteid'];

    $query = "Delete from Tracks Where Track_Id = $id";
    $res = mysqli_query($DBOpen, $query);

    header('Location: Tracks.php');
}


?>