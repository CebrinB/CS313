<?php


session_start();

require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);
  $item_id = filter_input(INPUT_POST, 'item_id', FILTER_SANITIZE_NUMBER_INT);
  $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
}

$sql = "INSERT INTO ecommerce.cart (item_id, quantity) VALUES
        (:user_id, :item_id, :quantity);";
$stmt = $db->prepare($sql);
$stmt->bindValue(':user_id', $item_id, PDO::PARAM_INT);
$stmt->bindValue(':item_id', $item_id, PDO::PARAM_INT);
$stmt->bindValue(':quantity', $quantity, PDO::PARAM_INT);
$stmt->execute();

$stmt->closeCursor();

//error handling output a resposne to the user if there is a problem

