<?php


class test extends one{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class one{
    protected $name='s';
}