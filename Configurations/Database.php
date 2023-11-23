<?php

require_once 'Models/Categories.php';

class Database
{

//    private $host = "infyenterprise.com";
    private $host = "localhost:3306";
    private $dbName = "u818699652_online_store";
    private $username = "u818699652_online_store";
    private $password = "bDPPQuJ1UoKfl3f9SzIvSXOT8uNRE0Vy";
    public $conn;

    public $categories;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->categories = new Categories();
    }

    public function dbConnection(): ?PDO
    {

        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host .
                ";dbname=" . $this->dbName,
                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

    /**
     * @param $sql
     * @param $db
     * @return mixed
     * @throws PDOException
     * @throws JsonException
     * @meta returns all SQL statement results
     */
    public function runSelectAllQuery($sql, $db)
    {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $count = $this->getCount($stmt);
        if ($count === 0) {
            $this->responses->warningNoResults();
        }

        return $stmt->fetchAll();
    }

    /**
     * @param $sql
     * @param $db
     * @return mixed
     * @meta returns one SQL statement result
     * @throws JsonException
     */
    public function runSelectOneQuery($sql, $db)
    {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $count = $this->getCount($stmt);
        if ($count === 0) {
            $this->responses->warningNoResults();
        }
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        return $result[0];
    }


    /**
     * @param $sql
     * @param $db
     * @return void
     */
    public function runQuery($sql, $db): void
    {
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }

    /**
     * @param $stmt
     * @return int
     */
    private function getCount($stmt): int
    {
        return $stmt->rowCount();
    }

    /**
     * @param $sql
     * @param $db
     * @return int
     */
    public function getResultCount($sql, $db): int
    {
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

}
