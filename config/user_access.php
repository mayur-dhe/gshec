<?php
$server = $_SERVER['HTTP_HOST'];
$servername = "localhost";

if ($server == "localhost") {
    $username = "root";
    $password = "";
    $dbname= "gshec_db";
    $host = "http://localhost/gshec/";

} else if ($server == "gshec.craftitt.com") {
    $username = "u610117377_gshec_user";
    $password = "gshec123U";
    $dbname= "u610117377_gshec";
    $host = $server.'/';

} else {
    $username = "u610117377_gshec_user";
    $password = "gshec123U";
    $dbname= "u610117377_gshec";
    $host = $server.'/';
}


