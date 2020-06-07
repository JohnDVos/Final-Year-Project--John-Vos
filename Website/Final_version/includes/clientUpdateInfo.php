<?php
require 'dbh.inc.php';                                                          //include connection script.

session_start();
    
    //set up data to be user later.
    $clientID = $_SESSION['cid'];
    $gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
    $clientPhoneNumb = mysqli_real_escape_string($conn, $_REQUEST['clientPhoneNumb']);
    $country = mysqli_real_escape_string($conn, $_REQUEST['country']);
    $healthProblem = mysqli_real_escape_string($conn, $_REQUEST['healthProblem']);
    $height = mysqli_real_escape_string($conn, $_REQUEST['height']);
    $dateOfBirth = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
    
    //prepared statement sends SQL to databse first, then fills in palceholders by sending user data
    $sql = "UPDATE client
            SET gender = '$gender',
                clientPhoneNumb = '$clientPhoneNumb',
                country = '$country',
                healthProblem = '$healthProblem',
                height = $height,
                dateOfBirth = '$dateOfBirth'
            WHERE clientID = $clientID;";

if(mysqli_query($conn, $sql)) {
    header("Location: ../index.php?status=updated");   
    exit();
} else {
    header("Location: ../index.php?status=error");  
    exit();
}