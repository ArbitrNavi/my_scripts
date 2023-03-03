<?php
session_start();
require_once "init.php";
var_dump($_SESSION[Config::get('session.user_session')]); ?>