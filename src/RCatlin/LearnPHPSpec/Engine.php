<?php namespace RCatlin\LearnPHPSpec;

/**
 * Class Engine
 * @package RCatlin\LearnPHPSpec
 */
class Engine
{
    /**
     * Type V
     */
    const TYPE_V = "V";

    /**
     * Type Straight
     */
    const TYPE_STRAIGHT = "straight";

    /**
     * @var array
     */
    protected $validTypes = [self::TYPE_V, self::TYPE_STRAIGHT];

    /**
     * @var int
     */
    protected $numCylinders;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var float
     */
    protected $numLiters;

    /**
     * Engine constructor.
     * @param int $numCylinders
     * @param string $type
     * @param float $numLiters
     */
    public function __construct($numCylinders, $type, $numLiters)
    {
        $this->setNumCylinders($numCylinders);
        $this->setType($type);
        $this->setNumLiters($numLiters);
    }


    /**
     * @param null $type
     * @return $this
     * @throws \Exception
     */
    public function setType($type = null)
    {
        if ($type !== null) {
            if (!in_array($type, $this->validTypes)) {
                throw new \Exception('Invalid Engine Type');
            }
            $this->type = $type;
        } else {
            $this->type = self::TYPE_STRAIGHT;
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $numCylinders
     * @return $this
     */
    public function setNumCylinders($numCylinders)
    {
        $this->numCylinders = intval($numCylinders);

        return $this;
    }

    /**
     * @return int
     */
    public function getNumCylinders()
    {
        return $this->numCylinders;
    }

    /**
     * @param $numLiters
     */
    public function setNumLiters($numLiters)
    {
        $this->numLiters = floatval($numLiters);
    }

    /**
     * @return float
     */
    public function getNumLiters()
    {
        return $this->numLiters;
    }
}