<?php namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasEngine
 * @package RCatlin\LearnPHPSpec
 */
trait HasEngine
{
    /**
     * @var \RCatlin\LearnPHPSpec\Engine $engine
     */
    protected $engine;

    /**
     * @param Engine $engine
     * @return $this
     */
    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * @return Engine
     */
    public function getEngine()
    {
        return $this->engine;
    }
}
