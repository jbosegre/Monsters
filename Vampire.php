<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/8/2018
 * Time: 1:29 PM
 */

class Vampire extends Monster
{
    protected $victim;
    function __construct($name = "unknown", $victim = 0)
    {
        parent::__construct($name);

        $this->victim = $victim;
    }

    function getVictim()
    {
        return $this->victim;
    }

    function attack()
    {
        parent::attack();// TODO: Change the autogenerated stub
        $this->victim++;
        echo "<p>" . $this->name . " Has killed " . $this->victim . " victim(s)</p><br>";
    }
}