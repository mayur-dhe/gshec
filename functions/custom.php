<?php

function concat_string($text, $limit=90) {

    return mb_strimwidth($text, 0, $limit, "...");
}
?>