<?php
require 'dbh.inc.php';                                                          //include connection script.

session_start();
    
    //set up data to be user later.
    $clientID = $_SESSION['cid'];



    //prepared statement sends SQL to databse first, then fills in palceholders by sending user data
    $sql = "UPDATE client
            SET personalTrainerID = '$ptID'
            WHERE clientID = '$cleintID';";
            
            

if(mysqli_query($conn, $sql)) {
    header("Location: ../index.php?status=updated");   
    exit();
} else {
    header("Location: ../index.php?status=error");  
    exit();
}