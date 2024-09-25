<?php

require '../vendor/autoload.php';

date_default_timezone_set('Europe/London');

session_start();
const VIEWS = "../App/Views/";

global $config;
$config = require_once "../App/Config/main.php";

$router = require '../App/Routes/index.php';