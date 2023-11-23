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

        $database = new Database();
        $db = $database->dbConnection();
        $categories = $database->categories;

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $categories->getGetItemById($_POST['id']);

        $data = $database->runSelectAllQuery($sql, $db);

        $responses->successDataRetrieved($response,$data,$categories->table);

    } catch (Exception $ex) {
        $responses->failedOperation($ex);
    }
} else {

    $responses->errorInvalidRequest($response);
}