<?php

require_once __DIR__ . '/../core/Database.php';
$config = require __DIR__ . '/../config/db_config.php';


$database = new Database(
    $config['servername'],
    $config['username'],
    $config['password'],
    $config['database']
);

$pdo = $database->connect();
