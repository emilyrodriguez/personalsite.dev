<?php
$_ENV = require __DIR__ . '/../../.env.php';
require("../db_connect.php");
require_once __DIR__ . '/../../models/User.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$list = "TRUNCATE users";
$dbc->exec($list);

$user = new User;
$user->name = 'The Collector';
$user->email = 'thecollector@nowhere.com';
$user->username = "thecollector";
$user->password = $_ENV['USER_PASS'];
$user->profileImgSrc = 'the-collector.jpg';
$user->bannerImgSrc = 'collector-background.jpg';
$user->attrOne = "Passionate Antiquer";
$user->attrTwo = "Curious Explorer";
$user->attrThree = "Superhero Fan";
$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = $_ENV['USER_PASS'];
$user->save();