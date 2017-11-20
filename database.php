<?php

// Connection Paramters
$db_hostname = "localhost";
$db_database = "dbName";
$db_username = "root";
$db_password = "";

// Coneection Handle
$DBH = new PDO("mysql:host=$db_hostname;dbname=$db_database; charset=utf8", $db_username, $db_password);

?>
