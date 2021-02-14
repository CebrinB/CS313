<?php

session_start();

require_once 'database.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_name = htmlspecialchars($_POST['user_name']);
  $rating = htmlspecialchars($_POST['rating']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);
  $item_id = htmlspecialchars($_POST['item_id']);
}

$sql = 'SELECT * FROM ecommerce.user WHERE user_name = '.$user_name;
$stmt = $db->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt->closeCursor();

echo $user['user_id'];


?>