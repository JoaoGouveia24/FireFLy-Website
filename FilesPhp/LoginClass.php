<?php 

//Login in the database;
$usernameLogin = $_POST["UsernameLog"];
$passwordLogin = $_POST["PasswordLog"];
//



/*My sql validation */
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

//

if($usernameLogin!=null){

    $HashedPassword = hash('sha256', $passwordLogin);
    $DataSelect = "Select Username, Pass , Email, Conta_Id from Conta where username = '".$usernameLogin."' and Pass= '".$HashedPassword."'";
    $Result = mysqli_query($DBOpen, $DataSelect);
    $ResultScan = mysqli_num_rows($Result);
         
        if($ResultScan==0){  
            echo '<script type="text/javascript">
            window.onload = function () { alert("Username or Password wrong!"); } 
            </script>'; 
            header('location: Login.php');
        }else{
            $linha=mysqli_fetch_array($Result);
                session_start();
                $_SESSION["UserId"]= $linha["Conta_Id"];
                $_SESSION["NameAcc"]= $linha["Username"];
                $_SESSION["MailAcc"]= $linha["Email"];
                $_SESSION["PasswordAcc"] = $linha["Pass"];

                header('location: MainController.php');
        }
    }
?>