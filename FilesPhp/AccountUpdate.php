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


$UsernameNew = $_POST["UsernamePro"];
$EmailNew = $_POST["EmailPro"];
$PasswordComfirmation = $_POST["Passcomf"];

$HashedPassword = hash('sha256', $PasswordComfirmation);

if($HashedPassword == $_SESSION["PasswordAcc"]){

    $Update = "UPDATE Conta SET Username = '".$UsernameNew."', Email = '".$EmailNew."' WHERE Conta_Id = '".$_SESSION["UserId"]."'";
    $Result = mysqli_query($DBOpen, $Update);
    header('location: Login.php');

}else{
    echo '<script type="text/javascript">
            window.onload = function () { alert("WRONG PASSWORD!"); } 
            </script>'; 

        header( "refresh:3;url=ProfileUser.php" );
}


?>