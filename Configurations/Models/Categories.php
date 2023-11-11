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
        return "SELECT * FROM ".$this->table;
    }


}