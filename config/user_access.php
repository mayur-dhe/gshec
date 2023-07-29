<?php
$server = $_SERVER['HTTP_HOST'];
$servername = "localhost";

if ($server == "localhost") {
    $dbname= "gshec_db";
    $username = "root";
    $password = "";
    $host = "http://localhost/gshec/";

} else if ($server == "gshec.craftitt.com") {
    $username = "u610117377_gshec_user";
    $password = "gshec123U";
    $dbname= "u610117377_gshec";
    $host = $server.'/';

} else {
    // for edu server
    $dbname= "gshec";
    $username = "root";
    $password = "password";
    $host = $server.'/';
}


