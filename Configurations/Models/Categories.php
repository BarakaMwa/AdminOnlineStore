<?php


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
     * @param $sql
     * @param $search
     * @return string
     */
    public function searchBy($sql, $search): string
    {
        return $sql . " Where name LIKE '%" . $search['value'] . "%' OR status LIKE '%" . $search['value'] . "%'";
    }

    /**
     * @param $start
     * @param $length
     * @return string
     */
    public function getPage(string $sql, $start, $length): string
    {
        return $sql. " LIMIT ".$start.", ".$length;
    }


}