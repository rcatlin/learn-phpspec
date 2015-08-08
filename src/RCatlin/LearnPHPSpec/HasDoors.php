<?php namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasDoors
 * @package RCatlin\LearnPHPSpec
 */
trait HasDoors
{
    /**
     * @var \RCatlin\LearnPHPSpec\Doors $doors
     */
   protected $doors;

    /**
     * @return Doors
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param Doors $doors
     */
    public function setDoors(Doors $doors)
    {
        $this->doors = $doors;
    }
}

