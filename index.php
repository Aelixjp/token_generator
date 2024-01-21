<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=utf-8");
    header("Access-Control-Allow-Methods: GET");

    $bytes = openssl_random_pseudo_bytes(10, $cstrong);
    $token = bin2hex($bytes);

    $resp = [
        "status" => true,
        "msg" => "OK",
        "data" => ["token" => $token]
    ];

    echo json_encode($resp);

?>