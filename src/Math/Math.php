<?php
/**
 */

namespace Math;

use Math\Extension\ExtensionInterface;

/**
 */
class Math
{
    /**
     * @var ExtensionInterface
     */
    protected $extension;

    /**
     */
    public function __construct(ExtensionInterface $extension)
    {
        $this->extension = $extension;
    }

    /**
     */
    public function add($left, $right)
    {
        return $this->extension->add($left, $right);
    }

    /**
     */
    public function subtract($left, $right)
    {
        return $this->extension->subtract($left, $right);
    }

    public function multiply($left, $right)
    {
        return $this->extension->multiply($left, $right);
    }

    public function divide($left, $right)
    {
        return $this->extension->divide($left, $right);
    }

    public function compare($left, $right)
    {
        return $this->extension->compare($left, $right);
    }

    public function abs($value)
    {
    }

    public function ceil($value)
    {
    }

    public function floor($value)
    {
    }
}
