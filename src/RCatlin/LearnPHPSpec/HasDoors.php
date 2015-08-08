<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasDoors
 */
trait HasDoors
{
   /**
    * @var \RCatlin\LearnPHPSpec\Doors
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
