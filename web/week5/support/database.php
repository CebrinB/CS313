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
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo "<h1>Scripture Resources</h1></br>";
  foreach ($db->query('SELECT book, chapter, verse FROM team05.scriptures') as $row)
    {
      echo "<div><a href=\"/scriptureDetails.php\"><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b></a></div>";
    }
}

?>

<html>
  <form method="POST">
    <input type="text" name="book">
    <input type="submit" value="submit">
  </form>
</html>