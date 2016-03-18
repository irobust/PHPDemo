<?php
require_once 'lib/medoo.php';
$db = new medoo(array(
	// required
	'database_type' => 'mysql',
	'database_name' => 'classicmodels',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
));
