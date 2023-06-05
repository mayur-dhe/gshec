<?php

// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value

function CallAPI($method, $url, $data = false)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_URL,$url);
    if($method == "post")
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);  //Post Fields
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $headers = [
        //     'Authorization: Bearer '.$token
        // ];
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec ($ch);
    curl_close ($ch);
    return json_decode($response,true);
}

?>

