<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasEngine
 */
trait HasEngine
{
    /**
     * @var \RCatlin\LearnPHPSpec\Engine
     */
    protected $engine;

    /**
     * @param Engine $engine
     *
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
