<?php

require_once '../../Security/Headers.php';
session_start();
require_once '../../Utilities/Responses.php';
require_once '../../Configurations/Database.php';
require_once '../../Configurations/Models/DatatablesResponse.php';
$response = array();
$status = false;
$responses = new Responses();
$dataTable = new DatatablesResponse();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
    } catch (Exception $ex) {
    }
}else {

    $responses->errorInvalidRequest($response);
}