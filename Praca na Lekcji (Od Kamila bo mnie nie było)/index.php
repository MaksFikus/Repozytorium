<?php


require_once 'Database.php';

$database = new Database('127.0.0.1', 'root', '', 'grupa_s');

var_dump($database->getByPrimaryKey("products", 1, 1));

var_dump($database->getAllData("users"));

var_dump($database->getByUniqueIndex("products", 2,2));

