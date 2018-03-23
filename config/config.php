<?php
ob_start(); //Turns on output buffering 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$timezone = date_default_timezone_set("Asia/Kolkata");


$con = mysqli_connect("localhost", "root", "", "wedding"); 

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>