<?php

namespace RCatlin\LearnPHPSpec;

/**
 * Trait HasModel
 */
trait HasModel
{
    /**
     * @var \RCatlin\LearnPHPSpec\Model
     */
    protected $model;

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param Model $model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}
