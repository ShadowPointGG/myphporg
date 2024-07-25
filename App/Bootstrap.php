<?php
// Including global autoloader
require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/Config/vars.php';
// Init config data
$config = array();

// Basic config for Application
$config['app'] = require 'Config/app.php';
$config['database'] = require 'Config/db.php';
