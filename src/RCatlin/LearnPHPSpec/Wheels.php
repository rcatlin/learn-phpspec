<?php

/**
 * Created by PhpStorm.
 * User: ryan.catlin
 * Date: 8/8/15
 * Time: 4:26 PM
 */
namespace RCatlin\LearnPHPSpec;

/**
 * Class Wheels
 */
class Wheels
{
    use HasBrand;
    use HasCount;

    /**
     * @var float
     */
    protected $diameter;

    /**
     * Wheels constructor.
     *
     * @param Brand $brand
     * @param $count
     * @param float $diameter
     */
    public function __construct(Brand $brand, $count, $diameter)
    {
        $this->setBrand($brand);
        $this->setCount($count);
        $this->setDiameter($diameter);
    }

    /**
     * @param $diameter
     *
     * @return $this
     */
    public function setDiameter($diameter)
    {
        $this->diameter = floatval($diameter);

        return $this;
    }

    /**
     * @return float
     */
    public function getDiameter()
    {
        return $this->diameter;
    }
}
