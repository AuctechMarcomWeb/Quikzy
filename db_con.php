<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quickzy_db";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); 
    die("Connection failed. Please try again later.");
}
?>