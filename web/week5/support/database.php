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

  $statement = $db->prepare('SHOW TABLES FROM `ecommerce`');
  $statement->execute();
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  include('database_error.php')
  die();
}

//Go through each result
  //while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    //echo "<div><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b> - \"" . $row['content'] . "\"</div>";
  //}

  //$row = $statement->fetch(PDO::FETCH_ASSOC));
  echo 'howdy';


?>