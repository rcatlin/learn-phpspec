<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasWheels
 */
trait HasWheels
{
    /**
     * @var \RCatlin\LearnPHPSpec\Wheels
     */
    protected $wheels;

    /**
     * @return Wheels
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param Wheels $wheels
     *
     * @return $this
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;

        return $this;
    }
}
