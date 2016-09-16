<?php

$_ENV = require __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');


$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    profileImgSrc VARCHAR(200) NULL,
    bannerImgSrc VARCHAR(200) NULL,
    attrOne VARCHAR(35) NULL,
    attrTwo VARCHAR(35) NULL,
    attrThree VARCHAR(35) NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);