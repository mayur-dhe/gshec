<?php
require_once 'absolutePath.php';

// Database credentials
$serverName = "localhost";

if ($domainName == "localhost") {
    $dbname= "gshec";
    $username = "root";
    $password = "";
} else {
    // for edu server
    $dbname= "gshec";
    $username = "root";
    $password = "password";
}


