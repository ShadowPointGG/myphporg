<?php

require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;




const VIEWS = "../App/Views/";

global $config;
$config = require_once "../App/Config/main.php";

$router = require '../App/Routes/index.php';