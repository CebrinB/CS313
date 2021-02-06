<?php
session_start();

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $statement = $db->prepare('SELECT item_id, item_name, item_price, item_description FROM ecommerce.item');
  $statement->execute();

}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

return $statement;

?>