<!DOCTYPE html>
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
    <!--Login Form bellow -->
    <div class="center" >
      <h1>Login</h1>
      <form method="POST" action="LoginClass.php">
        <div class="txt_field">
          <input type="text" name="UsernameLog" required >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="PasswordLog" required>
          <span></span>
          <label>Password</label>
        </div>

        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="SignUp.php">Signup</a>
        </div>
      </form>
    </div>
    </body>
</html>




    