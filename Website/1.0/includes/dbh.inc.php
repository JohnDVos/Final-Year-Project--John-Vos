<?php 
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.
   
$dBServername = "localhost";
$dBUsername = "jv148_user";
$dBPassword = "**********";
$dBName		= "jv148_log_in_system";

//creates connection to database.
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
	die("connection failed: " .mysqli_connect_error());
}