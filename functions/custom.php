<?php

function DFA($data) {
    echo '<pre>';
    print_r($data);
}

function concat_string($text, $limit=90) {
    return mb_strimwidth($text, 0, $limit, "...");
}
?>