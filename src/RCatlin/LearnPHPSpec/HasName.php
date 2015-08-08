<?php namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasName
 * @package RCatlin\LearnPHPSpec
 */
trait HasName
{
    /**
     * @var string $name
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = (string) $name;

        return $this;
    }


}