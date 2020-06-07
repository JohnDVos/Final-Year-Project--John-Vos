<?php
require 'dbh.inc.php';                                                          //include connection script.

session_start();
    
    //set up data to be user later.
    $clientID = mysqli_real_escape_string($conn, $_REQUEST['clientID']);
    $startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
    $endDate = mysqli_real_escape_string($conn, $_REQUEST['endDate']);
    $startTime = mysqli_real_escape_string($conn, $_REQUEST['startTime']);
    $endTime = mysqli_real_escape_string($conn, $_REQUEST['endTime']);

    
    //prepared statement sends SQL to databse first, then fills in palceholders by sending user data
    $sql = "INSERT INTO booking (clientID, startDate, endDate, startTime, endTime)
            VALUES ($clientID, '$startDate', '$endDate', '$startTime', '$endTime');";

if(mysqli_query($conn, $sql)) {
    header("Location: ../index.php?status=bookingSuccess");   
    exit();
} else {
    header("Location: ../index.php?status=bookingError");  
    exit();
}