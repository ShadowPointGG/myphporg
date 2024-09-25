<?php
$db = ActiveRecord\Config::instance();
$db->set_connections([
    'db' => 'mysql://'.DB_USER.':'.DB_PASS.'@'.DB_HOST.'/'.DB_NAME,
]);
$db->set_default_connection('db');

return $db;