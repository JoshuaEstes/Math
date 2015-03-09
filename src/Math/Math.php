<?php
/**
 */

namespace Math;

use Math\Extension\ExtensionInterface;

/**
 * The Math class SHOULD use the Extension injected into it and support the
 * most common functions. This class should also have a few math functions that
 * take advantage of the methods in the extension
 */
class Math
{
    /**
     * @var ExtensionInterface
     */
    protected $extension;

    /**
     * @param ExtensionInterface
     */
    public function __construct(ExtensionInterface $extension)
    {
        $this->extension = $extension;
    }

    /**
     * @param mixed $left
     * @param mixed $right
     * @return mixed
     */
    public function add($left, $right)
    {
        return $this->extension->add($left, $right);
    }

    /**
     * @param mixed $left
     * @param mixed $right
     * @return mixed
     */
    public function subtract($left, $right)
    {
        return $this->extension->subtract($left, $right);
    }

    /**
     * @param mixed $left
     * @param mixed $right
     * @return mixed
     */
    public function multiply($left, $right)
    {
        return $this->extension->multiply($left, $right);
    }

    /**
     * @param mixed $left
     * @param mixed $right
     * @return mixed
     */
    public function divide($left, $right)
    {
        return $this->extension->divide($left, $right);
    }

    /**
     * @param mixed $left
     * @param mixed $right
     * @return mixed
     */
    public function compare($left, $right)
    {
        return $this->extension->compare($left, $right);
    }
}
