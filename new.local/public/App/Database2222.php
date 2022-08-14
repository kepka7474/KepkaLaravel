<?php

namespace App;

abstract class Database2222 {

    public $connect;

    function __construct()
    {

        $this->connect = mysqli_connect('db', 'mysql','test45','laravel', '3306');
    }

    abstract function get();
    abstract function create($data);
    abstract function where($key, $value);
    abstract function whereAll($key, $value);


}