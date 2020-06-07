<?php
/*code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s */

    /*
    *initialises session and enables storage of session variable info.
    *requires dbh file which is needed to link website to database.
    *require creates error message that stops script, include creates an error & continues script.
    *call file dbh.inc.php from includes folder.
    */

    session_start();
    require "includes/dbh.inc.php";
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        <script src="javascript/scripts.js"></script>
        
        <title>Final Year Project</title>
    </head>
    
    <body>
        
        <!--Topnav of document with log in function-->
        <!-- Menu links -->
        <nav class="topnav" id="topnavMenu">
            <div class="nav-header-main">
                <a href="index.php">Home:</a>
                <a href="nutrition.php">Nutrition:</a>
                <a href="training.php">Training:</a>
                <a href="trainers.php">Personal Trainers:</a>
                <a href="FAQ.php">FAQ:</a>
                <a href="GDPR.php">GDPR:</a>
            </div>
            
            <div class="header-login">
            <!-- Log in form 
                    - use method post as handling sensitive data. 
                    - inputs in form of username, email & password so user can use either.
                    - log in or log out show depending on session, i.e. logged in or not.
            -->
            <?php
                if (!isset($_SESSION['uid'])) {
                  echo '
                    <a href="login.php" id="signup">Login</a>
                    <a href="signup.php" id="signup">Signup</a>
        		  ';
                } else if (isset($_SESSION['uid'])) {
                  echo '
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="login-submit" id="submit">Logout</button>
                    </form>';
                }
            ?>
            </div>
            <!-- burger menu icon -->
            <div class="burgerIcon" onclick="reactiveTopnav(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>