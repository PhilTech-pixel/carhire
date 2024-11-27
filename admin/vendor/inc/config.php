<?php
$dbuser = "root";
$dbpass = "";
$host = "localhost";
$port = 3307; // Specify the port here
$db = "vehiclebooking";

// Include the port in the mysqli constructor
$mysqli = new mysqli($host, $dbuser, $dbpass, $db, $port);
?>