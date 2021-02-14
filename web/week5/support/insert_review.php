<?php

session_start();

require_once 'database.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_name = htmlspecialchars($_POST['user_name']);
  $rating = htmlspecialchars($_POST['rating']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);
  $item_idSTR = htmlspecialchars($_POST['item_id']);
}

echo json_encode($item_idSTR, JSON_NUMERIC_CHECK);
echo $item_idSTR;
$item_id = $item_idSTR + 0;
echo $item_id;

// $sql = 'SELECT * FROM ecommerce.user WHERE user_name = \''.$user_name.'\'';
// $stmt = $db->prepare($sql);
// $stmt->execute();
// $user = $stmt->fetch(PDO::FETCH_ASSOC);

// $sql = "INSERT INTO ecommerce.review (user_id, rating, title, content, item_id) VALUES
//         (:user_id, :rating, :title, :content, :item_id);";
// $stmt = $db->prepare($sql);
// $stmt->bindValue(':user_id', $user['user_id'], PDO::PARAM_INT);
// $stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
// $stmt->bindValue(':title', $title, PDO::PARAM_STR);
// $stmt->bindValue(':content', $content, PDO::PARAM_STR);
// $stmt->bindValue(':item_id', $item_id, PDO::PARAM_STR);
// $stmt->execute();

// $stmt->closeCursor();

// $new_page = "item.php?item_id=$item_id";

// header("Location: $new_page");
// die();


?>