<?php

namespace App;

class User
{

    protected $name;
    /**
     * User constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayName()
    {
        echo $this->name;
    }
}