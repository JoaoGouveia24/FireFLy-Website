<?php 

session_start();



if(isset($_COOKIE['id'])){$TrackId = $_COOKIE['id'];}

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

$TrackNameOld = $_POST["TrackName"];
$Passcomffff = $_POST["Passcomf"];

$HashedPassword = hash('sha256', $Passcomffff);

if($HashedPassword == $_SESSION["PasswordAcc"]){

    $UpdateT = "UPDATE Tracks SET Track_Name = '".$TrackNameOld."' Where Track_Id = '".$TrackId."'";
    $Result = mysqli_query($DBOpen, $UpdateT);
    header('location: Tracks.php');

}else{
    echo '<script type="text/javascript">
            window.onload = function () { alert("WRONG PASSWORD!"); } 
            </script>'; 

        header( "refresh:2 ; url=Tracks.php" );
}



?>