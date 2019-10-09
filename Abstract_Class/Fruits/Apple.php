<?php
include_once(dirname(__FILE__) . '/../Fruits.php');

class Apple extends Fruit
{

    public function howToEat()
    {
        return "Apple could be slided";
    }
}