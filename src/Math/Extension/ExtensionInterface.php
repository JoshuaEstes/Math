<?php
/**
 */

namespace Math\Extension;

/**
 */
interface ExtensionInterface
{
    /**
     * Adds two numbers together
     *
     * $left + $right
     *
     * @param integer|string $left
     * @param integer|string $right
     * @return string
     */
    public function add($left, $right);

    /**
     * Subtracts two numbers
     *
     * $left - $right
     *
     * @param integer|string $left
     * @param integer|string $right
     * @return string
     */
    public function subtract($left, $right);

    /**
     * Multiply two numbers
     *
     * $left * $right
     *
     * @param integer|string $left
     * @param integer|string $right
     * @return string
     */
    public function multiply($left, $right);

    /**
     * Divide two numbers
     *
     * $left / $right
     *
     * @param integer|string $left
     * @param integer|string $right
     * @return string
     */
    public function divide($left, $right);

    /**
     * Compares two numbers
     *
     * $left > $right ~> 1
     * $left < $right ~> -1
     * $left = $right ~> 0
     *
     * @param integer|string $left
     * @param integer|string $right
     * @return integer
     */
    public function compare($left, $right);

    /**
     * If this extension can be used or not
     *
     * @return boolean
     */
    public function isAvailable();
}
