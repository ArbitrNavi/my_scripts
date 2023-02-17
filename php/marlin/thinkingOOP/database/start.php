<?php
$config = include "config.php";
include "database/QueryBuilder.php";
include "database/Connection.php";

//dd($config);

$result = new QueryBuilder(Connection::make($config["database"]));
return $result;