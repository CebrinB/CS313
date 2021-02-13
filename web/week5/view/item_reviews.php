<?php

session_start();

include '../support/database.php';

echo 'it worked';

$item_id = htmlspecialchars($_GET['item_id']);

$sql = '';
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
              $sql = 'SELECT * FROM ecommerce.review WHERE item_id LIKE :filter';
            } else die("No reviews.");
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':filter', '%'.$_GET['item_id'].'%', PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();

            foreach ($rows as $row) {
              echo $row['title'];
            }

?>