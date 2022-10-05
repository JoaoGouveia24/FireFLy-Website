<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>FireFly Admin</title>

        <link rel="stylesheet" href="/FireFly/Resources/CSSFiles/StyleAdmin.css">
        <link rel="stylesheet" href="/FireFly/Resources/CSSFiles/StyleProfile.css">
    </head>
    <body>
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

        <div class="sidebar">
            <div class="sidebar-Brand">
                <img class="sidebar-BrandLogo" src="/FireFly/Resources/Images/whiteLogo.png">
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="/FireFly/FilesPhp/DashBoard.php"><span class="las-Dash"></span>
                        <span>Main</span></a>
                    </li>
                    <li>
                        <a class="active" href="/FireFly/FilesPhp/ProfileUser.php"><span class="las-User"></span>
                        <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="/FireFly/FilesPhp/Albums.php"><span class="las-Admin"></span>
                        <span>Albums</span></a>
                    </li>
                    <li>
                        <a href="/FireFly/FilesPhp/Tracks.php"><span class="las-Admin"></span>
                        <span>Tracks</span></a>
                    </li>
                </ul>
                <a class="cta" href="/FireFly/FilesPhp/Login.php"><button class="btnL">LogOut</button></a>
                <small class="SUB">FIREFLY@2022</small>
            </div>
        </div>
        <div class="main-content">

        <div class="center" >
        <h1>Profile</h1>
        <form method="POST" action="AccountUpdate.php">
        <div class="txt_field">
          <input type="text" name="UsernamePro" value="<?php echo $_SESSION["NameAcc"]; ?>">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="text" name="EmailPro" value="<?php echo $_SESSION["MailAcc"]; ?>">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="Passcomf">
          <span></span>
          <label>Comfirm Password</label>
        </div>
        <input type="submit" value="Change">
        <div id="cx1"></div>
      </form>
    </div>
	   
        </div>
        </div>

    </body>
</html>