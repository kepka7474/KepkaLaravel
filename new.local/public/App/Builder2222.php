<?php

namespace App;


class Builder2222 extends Database2222{
    public string $table;

    function get(){
        $result =  mysqli_query($this->connect, "SELECT * FROM {$this->table}");
        return mysqli_fetch_all($result);
    }

    function create($data){
        $colums = '';
        $values = '';
        foreach ($data as $key => $value){
            $colums.= $key.',';
            $values .= "'$value',";

        }
        $colums = rtrim($colums, ',');


        $values = rtrim($values, ',');


        mysqli_query($this->connect, "INSERT INTO $this->table ($colums) VALUES ($values)");

    }

    function where($key, $value){
        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = '{$value}'");
        return mysqli_fetch_row($result);
    }

    function whereAll($key, $value){
        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = '{$value}'");
        return mysqli_fetch_all($result);
    }
}