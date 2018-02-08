<?php

class Troll extends Monster{
    protected $strength;

    function __construct($name = "unknown", $strength)
    {
        parent::__construct($name);
        $this->strength = $strength;
    }

    function eat(){
        $this->strength += 2;
    }

    function attack(){
        parent::attack();
        echo "<h5>Troll $this->name attacks with strength $this->strength </h5>";

    }

}