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

<!------ HTML ------>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        <script type="text/javascript" src="javascript/scripts.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        
        <!--Topnav of document with log in function-->
        <!-- Menu links -->
        <nav class="topnav" id="topnavMenu">
            <a href="index.php">Home:</a>
            <a href="nutrition.php">Nutrition:</a>
            <a href="training.php">Training:</a>
            <a href="trainers.php">Personal Trainers:</a>
            <a href="FAQ.php">FAQ:</a>
            <a href="GDPR.php">GDPR:</a>
            <a href="javascript:void(0);" class="icon" onclick="reactiveTopnav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
            
       
    </body>
</html>