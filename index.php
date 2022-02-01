<?php
    require_once('api.php');

    $api = new API;

    header('Content-Type: application/json;charset=utf-8');

    print_r($api->select()); 
?>