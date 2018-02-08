<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

include('Monster.php');
include('Vampire.php');
include('Troll.php');
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

$vampire = new Vampire("Pete");
echo "<h5>Vampire's name is: " . $vampire->getName() . "</h5>";
echo "<h5>Vampire's victim is: " . $vampire->getVictim() . "</h5>";
$vampire->attack();
echo "<h5>Vampire's victim is: " . $vampire->getVictim() . "</h5>";

$troll = new Troll("Howard", 10);
echo "<h5>Troll's name is: " . $troll->getName() . "</h5>";
echo "<h5>troll eats.</h5>";
$troll->eat();
$troll->attack();




?>
</body>
</html>