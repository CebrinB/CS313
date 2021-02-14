<?php

start_session();

if ($_SERVER_RESPONSE_METHOD == 'POST') {
  $user_name = htmlspecialchars($_POST['user_name']);
  $rating = htmlspecialchars($_POST['rating']);
  $title = htmlspecialchars($_POST['title']);
  $content = htmlspecialchars($_POST['content']);
  $item_id = htmlspecialchars($_POST['item_id']);



}

echo $rating;


?>