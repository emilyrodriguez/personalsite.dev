<?php
$_ENV = require __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');


$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    price INT(10) NOT NULL,
    description VARCHAR(200) NOT NULL,
    keywords VARCHAR(20) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    username VARCHAR(50) NOT NULL, 
    img_url VARCHAR(100) NOT NULL,
    featured TINYINT(1) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);