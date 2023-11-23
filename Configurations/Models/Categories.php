<?php

//namespace Admin\Models;

class Categories
{


    public $table = __CLASS__;
    public $id;
    public $name;
    public $active;
    public $status;
    public $dateCreated;
    public $dateModified;
    public $parentId;

    /**
     * @return string
     */
    public function getGetAll(): string
    {
        return "SELECT * FROM " . $this->table;
    }

    /**
     * @param string $sql
     * @param array $search
     * @return string
     */
    public function searchBy(string $sql, array $search): string
    {
        return $sql . " Where name LIKE '%" . $search['value'] . "%' OR status LIKE '%" . $search['value'] . "%'";
    }

    /**
     * @param string $sql
     * @param string $start
     * @param string $length
     * @return string
     */
    public function getPage(string $sql, string $start, string $length): string
    {
        return $sql. " LIMIT ".$start.", ".$length;
    }


}