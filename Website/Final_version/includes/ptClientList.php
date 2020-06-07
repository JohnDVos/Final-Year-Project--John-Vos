<?php
require 'dbh.inc.php';

    session_start();
    $ptID = $_SESSION['PTid'];

    $sql = "SELECT * FROM client WHERE personalTrainerID = ?";
    $stmt = mysqli_stmt_init($conn); 
    
    mysqli_stmt_bind_param($stmt, "i", $ptID);
	mysqli_stmt_execute($stmt); 
	$result = mysqli_stmt_get_result($stmt); 
	
 
	
