<?php
// Define constants

define('DB_HOST', 'localhost');
define('DB_USER', 'dev_admin');
define('DB_PASS', 'admin');
define('DB_NAME', 'php_dev');

// Create connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection

if ($conn->connect_error) {
  die('Connection Failed ' . $conn->connect_error);
}
