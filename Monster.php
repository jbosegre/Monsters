<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/8/2018
 * Time: 1:15 PM
 */

class Monster
{

    protected $name;

    function __construct($name = "unknown")
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function attack()
    {
        echo "<p>" . $this->name . " is attacking <br>";
    }
}