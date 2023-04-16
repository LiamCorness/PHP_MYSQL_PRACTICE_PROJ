<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$con = new mysqli ($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//echo "connected successfully"
?>