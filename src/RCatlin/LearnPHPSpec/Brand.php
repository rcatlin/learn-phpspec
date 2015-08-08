<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Class Brand
 */
class Brand
{
    use HasName;

    /**
     * @var string
     */
    protected $originCountry;

    /**
     * Brand constructor.
     *
     * @param string $name
     * @param string $originCountry
     */
    public function __construct($name, $originCountry)
    {
        $this->setName($name);
        $this->originCountry = $originCountry;
    }

    /**
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * @param string $originCountry
     *
     * @return $this
     */
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = (string) $originCountry;

        return $this;
    }
}
