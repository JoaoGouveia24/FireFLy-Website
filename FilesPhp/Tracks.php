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
                        <a href="/FireFly/FilesPhp/Albums.php"><span class="las-Admin"></span>
                        <span>Albums</span></a>
                    </li>
                    <li>
                        <a class="active" href="/FireFly/FilesPhp/Albums.php"><span class="las-Admin"></span>
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
                        $GetAlb = "Select Album_Id, Album_Name FROM Album WHERE User_Id = '".$_SESSION["UserId"]."'";
                        $Res = mysqli_query($DBOpen,$GetAlb);
                    ?>

                    <table class="greyGridTable">
                             <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Album</th>
                                    <th>Owner</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                                <tr>
                                    <tbody>
                                        <?php 

                                        if($Res){
                                        while($row1 = mysqli_fetch_assoc($Res)){

                                            $Alb = $row1["Album_Id"];
                                            $AlbN = $row1["Album_Name"];

                                            $Stat = "SELECT * FROM Tracks WHERE Album_Id= '".$Alb."' ";
                                            $ResultSet = mysqli_query($DBOpen, $Stat);

                                        if($ResultSet){
                                            while($row = mysqli_fetch_assoc($ResultSet)){
                                                $id = $row['Track_Id'];
                                                $name = $row['Track_Name'];
                                                $owner = $_SESSION["NameAcc"];

                                                echo '
                                                <tr>
                                                    <td>' . $id . '</td>
                                                    <td>' . $name . '</td>
                                                    <td>' . $AlbN . '</td>
                                                    <td>' . $owner . '</td>
                                                    <td><button class="btn"><a class="co" href="Manage.php?EditId='.$id.'" >Edit</a></button></td>
                                                    <td><button class="btn"><a class="co" href="deleteTrack.php?deleteid='.$id.'" >Delete</a></button></td>
                                                </tr>';
                                            }
                                        }
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