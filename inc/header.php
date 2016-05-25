<?php
include_once "sessions.php";
include_once "functions.php";
include_once "dbconnect.php";

?>
<html>
    <head>
        <title>Suraj bastola</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="top-bar">
            
        </div>
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="index.php"><img src = "img/logo.png" style="width:120px;" ></a></li>
                    <li><a href="#">||Home||</a></li>
                    <li><a href="#">||Contact||</a></li>
                    <li><a href="#">||About||</a></li>
                    <li><a href="#">||Add||</a></li>
                    <li><a href="gallery.php">||Gallery||</a></li>
                    <?php
                        if(isset($_SESSION['login'])){
                            ?>
                     <li><a href="logout.php">||Logout||</a></li>
                            <?php
                        }else{
                            ?>
                     <li><a href="login.php">||Login||</a></li>
                            <?php
                        }
                    ?>
                    <li><b title="Refresh page to see the changed/current Time.">
                        <?php date_default_timezone_set("Asia/Kathmandu"); echo date("D M,d") ?></b>
                    </li>
                </ul>
            </nav>
        </div>
        
