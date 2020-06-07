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

<script>
    function reactiveTopnav() {
        var x = document.getElementById("topnavMenu");
        if(x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<!------ HTML ------>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <!--Topnav of document with log in function-->
        <!-- Menu links -->
        <nav class="topnav" id="topnavMenu">
            <a href="index.php">Home:</a>
            
            <div class="subnav">
                <button class="subnavbtn"><a href="nutrition.php">Nutrition</a></button>
                <div class="subnav-content">
                    <a href="#somecontent1">Introduction:</a>
                    <a href="#calories">Calories:</a>
                    <a href="#somecontent3">BMR:</a>
                    <a href="#somecontent3">TDEE:</a>
                    <a href="#somecontent3">Macro-Nutrition:</a>
                    <a href="#somecontent3">Weight Loss:</a>
                    <a href="#somecontent3">Muscle Gain:</a>
                    <a href="#somecontent3">Maintenance:</a>
                    <a href="#somecontent3">Different Diets:</a>
                    <a href="#somecontent3">Supplements:</a>
                    <a href="#somecontent3">MyFitnessPal:</a>
                </div>
            </div>
            
            <a href="training.php">Training:</a>
            <a href="trainers.php">Personal Trainers:</a>
            <a href="FAQ.php">FAQ:</a>
            <a href="GDPR.php">GDPR:</a>
            <!--
            -- JS when menu drop down icon is clicked:
            --      menu becomes reactive 
            --      tells CSS drop down menu
            -->
            <a href="javascript:void(0);" class="icon" onclick="reactiveTopnav()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </body>
</html>