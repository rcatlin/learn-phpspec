<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasBrand
 */
trait HasBrand
{
    /**
     * @var \RCatlin\LearnPHPSpec\Brand
     */
    protected $brand;

    /**
     * @return Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Brand $brand
     *
     * @return $this
     */
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }
}
