<?php
$config = include "config.php";
include "database/QueryBuilder.php";
include "database/Connection.php";

//dd($config);

return new QueryBuilder(Connection::make($config["database"]));