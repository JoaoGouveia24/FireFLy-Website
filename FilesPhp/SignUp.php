
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FireFly</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/FireFly/Resources/CSSFiles/Style.css">
        <link rel="icon" type="image/x-icon" href="/FireFly/Favicon.ico">
</head>
<body>
      <!--Bubbles -->
      <div class="wrapper">
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
    </div>
    
    <!--sign up Form bellow -->
    <div class="center">
      <h1>Sign Up</h1>
      <form action="SignUpClass.php" method="post">
        <div class="txt_field">
          <input type="text" name="Username" required >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" name="Email" required >
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="Password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="PasswordConfirmation" required>
          <span></span>
          <label>Password Confirmation</label>
        </div>
        <input id="Sig" type="submit" value="Sign Up">
       
      </form>
      
    </div>

</body>



</html>