<?php
require 'dbh.inc.php';                                                          //include connection script.

session_start();


    //set up data to be user later.
    $clientID = $_SESSION['cid'];
    $weight = mysqli_real_escape_string($conn, $_REQUEST['weight']);
    $notes = mysqli_real_escape_string($conn, $_REQUEST['notes']);
    $goal = mysqli_real_escape_string($conn, $_REQUEST['goal']);
    
    //prepared statmenet sends SQL to databse first, then fills in palceholders by sending user data.
    $sql = "INSERT INTO clientProgressInfo (clientID, weight, notes, goal) 
            VALUES ($clientID,
                    $weight, 
                    '$notes',
                    '$goal');";

if(mysqli_query($conn, $sql)) {
    header("Location: ../index.php?records=Updated");
    exit();
} else {
    header("Location: ../index.php?records=Error"); 
    exit();
}