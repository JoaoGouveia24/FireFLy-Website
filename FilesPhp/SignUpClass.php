<?php 

//Register in to the database;
$username = $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];
$passwordConfirmation = $_POST["PasswordConfirmation"];

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

//Register
if($password == $passwordConfirmation){
    
    $HashedPassword = hash('sha256', $password);

    $DataInsert = "Insert into Conta (username, Email, Pass) values('".$username."','".$email."','".$HashedPassword."')";
    $Result = mysqli_query($DBOpen, $DataInsert);

    header('Location: Login.php');
    
}else{
    echo '<script>alert("Passwords doesnt match!")</script>';
}


?>