<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ncl-001';

try {
  $conexion = mysqli_connect($server, $username, $password, $database);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}  


?>