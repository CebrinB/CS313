<?php
require_once 'database.php';

$rows = $db -> query("SELECT * FROM ecommerce.item WHERE id='4'");
foreach ($rows as $row){
    echo "<div><b>" . $row['item_id'] . "</b></div>";
}

?>