<?php

/**
 * Created by PhpStorm.
 * User: ryan.catlin
 * Date: 8/8/15
 * Time: 4:35 PM
 */
namespace RCatlin\LearnPHPSpec;

class Doors
{
    use HasCount;

    /**
     * Doors constructor.
     *
     * @param $count
     */
    public function __construct($count)
    {
        $this->setCount($count);
    }
}
