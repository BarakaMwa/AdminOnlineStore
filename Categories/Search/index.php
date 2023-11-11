<?php
require_once '../../Security/Headers.php';
session_start();
require_once '../../Utilities/Responses.php';
require_once '../../Configurations/Database.php';
$response = array();
$status = false;
$responses = new Responses();

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] = 'GET') {


    $database = new Database();
    $db = $database->dbConnection();
    $cart = $database->cart;

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} else {

    $responses -> errorInvalidRequest($response);
}