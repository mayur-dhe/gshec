<?php
$server = $_SERVER['HTTP_HOST'];

if ($server == "localhost") {
    $host = "http://localhost/gshec/";
} else {
    $host = $server;
}

