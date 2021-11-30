<?php

$server = 'localhost';
$username = 'id17546152_luisthb85';
$password = 'SoBj9?pc!F]*px2<';
$database = 'id17546152_consultorio';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
