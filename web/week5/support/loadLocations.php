<?php

session_start();

require_once 'database.php';

$sql = 'SELECT * FROM ecommerce.location';
$stmt = $db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;

$stmt->closeCursor();

//error handling output a resposne to the user if there is a problem

