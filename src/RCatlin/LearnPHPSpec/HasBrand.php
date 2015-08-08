<?php namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasBrand
 * @package RCatlin\LearnPHPSpec
 */
trait HasBrand
{
    /**
     * @var \RCatlin\LearnPHPSpec\Brand $brand
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
     * @return $this
     */
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }


}
