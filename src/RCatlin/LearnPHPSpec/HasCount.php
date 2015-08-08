<?php namespace RCatlin\LearnPHPSpec;

trait HasCount
{
    /**
     * @var int $count
     */
    protected $count;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = intval($count);

        return $this;
    }


}