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

        $sql = $categories->getGetAll();

        $data = $database->runSelectAllQuery($sql, $db);

        $countAll = count($data);
        if ($_POST['search'] != null && $_POST['search']['value'] != "") {
            $sql = $categories->searchBy($sql, $_POST['search']);
        }
        $sql = $categories->getPage($sql, $_POST['start'], $_POST['length']);

        $data = $database->runSelectAllQuery($sql, $db);

        //    todo encrypt
        /* foreach ($result as $row) {
             $encrypted = encrypt($row['vendorId'],$ciphering,$encryption_iv,$options);
             $row["vendorId"] = $encrypted;
             $row["0"] = $encrypted;
         }*/

        $dataTable->data = $data;
        $dataTable->draw = $_POST['draw'];
        $dataTable->recordsTotal = $countAll;
        $dataTable->recordsFiltered = count($data);

        $responses->dataTableResponse($response, $dataTable);


    } catch (Exception $ex) {
        $responses->failedOperation($ex);
    }


} else {

    $responses->errorInvalidRequest($response);
}