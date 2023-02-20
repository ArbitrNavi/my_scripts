<?php
$config = include "../config.php";
include "QueryBuilder.php";
include "Connection.php";

//dd($config);

$result = new QueryBuilder(Connection::make($config["database"]));
return $result;