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

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
            <!--Topnav of document with log in function-->
            <div class="webpageHeader">
                <!-- Menu links -->
                <nav class="nav-header-main">
                    <a class="header-logo" href="index.php">
                        <img src="images/website_logo.jpg" alt="website logo">
                    </a>
                    <ul>
                        <li><a href="index.php">Home:</a></li>
                        <li><a href="nutrition.php">Nutrition:</a></li>
                        <li><a href="training.php">Training:</a></li>
                        <li><a href="trainers.php">Personal Trainers:</a></li>
                        <li><a href="FAQ.php">FAQ:</a></li>
                        <li><a href="GDPR.php">GDPR:</a></li>
                    </ul>
                </nav>
                <!-- Log in form -->
                <div class="header-login">
                <!--
                    - use method post as handling sensitive data. 
                    - inputs in form of username, email & password so user can use either.
                    - log in or log out show depending on session, i.e. logged in or not.
                -->
                <?php
                if (!isset($_SESSION['id'])) {
                  echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="E-mail/Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                  </form>
                  <a href="signup.php" class="header-signup">Signup</a>';
                }
                else if (isset($_SESSION['id'])) {
                  echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="login-submit">Logout</button>
                  </form>';
                }
                ?>
                </div>
            </div >
    </body>
</html>

