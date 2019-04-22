<?php

namespace Core;

abstract class BaseModel
{
    protected $table;
    private $mysqli;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function All()
    {
        $query = "SELECT * FROM {$this->table}";
        $sql = mysqli_query($this->mysqli,$query);
        if (!mysqli_query($this->mysqli,$query)) {
            echo mysqli_error($this->mysqli);
        }
        $result = [];
        while($data = mysqli_fetch_array($sql)){
            $result[] = $data;
        };
        return $result;
    }


    public function find($id = NULL)
    {
        $query = "SELECT * FROM {$this->table} WHERE id=$id";
        $sql = mysqli_query($this->mysqli,$query);
        if (!mysqli_query($this->mysqli,$query)) {
            echo mysqli_error($this->mysqli);
        }
        $row = mysqli_fetch_array($sql);
        return $result;
    }

    public function first($id = NULL)
    {
        $query = "SELECT * FROM {$this->table} ORDER BY {$this->table}.$id DESC LIMIT 1";
        $sql = mysqli_query($this->mysqli,$query);
        if (!mysqli_query($this->mysqli,$query)) {
            echo mysqli_error($this->mysqli);
        }
        $row = mysqli_fetch_array($sql);
        return $result;

    }



    
}