<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasColor
 */
trait HasColor
{
    /**
     * @var \RCatlin\LearnPHPSpec\Color
     */
    protected $color;

    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param Color $color
     *
     * @return $this
     */
    public function setColor(Color $color)
    {
        $this->color = $color;

        return $this;
    }
}
