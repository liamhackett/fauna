<?php
$databaseName = 'WHACKETT_lab';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'whackett_writer';
$password = 'DsLxFUKeno51';

$pdo = new PDO($dsn, $username, $password);
?>