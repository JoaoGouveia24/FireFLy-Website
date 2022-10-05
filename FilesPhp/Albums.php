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
        <link rel="stylesheet" href="/FireFly/Resources/CSSFiles/Table.css">
    </head>
    <body>

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
                        <a href="/FireFly/FilesPhp/ProfileUser.php"><span class="las-User"></span>
                        <span>Profile</span></a>
                    </li>
                    <li>
                        <a class="active" href="/FireFly/FilesPhp/Albums.php"><span class="las-Admin"></span>
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
                    <?php 
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

                        $Stat = "SELECT * FROM Album WHERE User_Id= '".$_SESSION["UserId"]."' ";
                        $ResultSet = mysqli_query($DBOpen, $Stat);
                    ?>

                    <table class="greyGridTable">
                             <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Year</th>
                                    <th>Owner</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                                <tr>
                                    <tbody>
                                        <?php 
                                        if($ResultSet){
                                            while($row = mysqli_fetch_assoc($ResultSet)){
                                                $id = $row['Album_Id'];
                                                $name = $row['Album_Name'];
                                                $year = $row['Album_Year'];
                                                $owner = $_SESSION["NameAcc"];

                                                echo '
                                                <tr>
                                                    <td>' . $id . '</td>
                                                    <td>' . $name . '</td>
                                                    <td>' . $year . '</td>
                                                    <td>' . $owner . '</td>
                                                    <td><button class="btn"><a class="co" href="delete.php?deleteid='.$id.'" >Delete</a></button></td>
                                                </tr>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </tr>
                    </table>

                </div>


                
        </div>
    </body>
</html>