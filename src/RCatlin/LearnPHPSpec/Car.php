<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Class Car
 */
class Car
{
    use HasColor;
    use HasDoors;
    use HasEngine;
    use HasModel;
    use HasWheels;

    /**
     * Car constructor.
     *
     * @param Color $color
     * @param Doors $doors
     * @param Engine $engine
     * @param Model $model
     * @param Wheels $wheels
     */
    public function __construct(Color $color, Doors $doors, Engine $engine, Model $model, Wheels $wheels)
    {
        $this->setColor($color);
        $this->setDoors($doors);
        $this->setEngine($engine);
        $this->setModel($model);
        $this->setWheels($wheels);
    }
}
