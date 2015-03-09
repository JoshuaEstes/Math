<?php
/**
 */

namespace Math\Extension;

/**
 */
interface ExtensionInterface
{
    /**
     * $left + $right
     */
    public function add($left, $right);

    /**
     * $left - $right
     */
    public function subtract($left, $right);

    /**
     * $left * $right
     */
    public function multiply($left, $right);

    /**
     * $left / $right
     */
    public function divide($left, $right);

    /**
     * $left > $right ~> 1
     * $left < $right ~> -1
     * $left = $right ~> 0
     */
    public function compare($left, $right);

    /**
     * If this extension can be used
     *
     * @return boolean
     */
    public function isAvailable();

    /**
     * @return boolean
     */
    public function supports($method);
}
