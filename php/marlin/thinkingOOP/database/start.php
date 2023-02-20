<?php

$config = include_once projectDir(). "/config.php";
include_once projectDir() . "/database/QueryBuilder.php";
include_once projectDir() . "/database/Connection.php";

//dd($config);

$result = new QueryBuilder(Connection::make($config["database"]));
return $result;