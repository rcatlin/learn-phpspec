<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Class Model
 */
class Model
{
    use HasBrand;
    use HasName;

    /**
     * @var int
     */
    protected $year;

    /**
     * Model constructor.
     *
     * @param Brand $brand
     * @param $name
     * @param int $year
     */
    public function __construct(Brand $brand, $name, $year)
    {
        $this->setBrand($brand);
        $this->setName($name);
        $this->setYear($year);
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }
}
