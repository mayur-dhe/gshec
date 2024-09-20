<?php
$domainName = $_SERVER['HTTP_HOST'];

if ($domainName == "localhost") {
    $host = "http://localhost/gshec/";
} else {
    $host = $domainName.'/';
}
?>
