<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

include('Monster.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monsters</title>
</head>
<body>
<?php


echo "<h5>creating monster</h5>";

$monster = new Monster("Troll");
echo "<h5>Monster's name is: " . $monster->getName() . "</h5>";
echo "<h5>Setting monster name to Goblin</h5>";
$monster->setName("Goblin");
echo "<h5>Monster's name is: " . $monster->getName() . "</h5>";
$monster->attack();


?>
</body>
</html>