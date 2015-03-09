<?php
/**
 */

namespace Math\Extension;

/**
 */
class BcMathExtension implements ExtensionInterface
{
    public function add($left, $right)
    {
        return bcadd($left, $right);
    }

    public function subtract($left, $right)
    {
        return bcsub($left, $right);
    }

    public function multiply($left, $right)
    {
        return bcmul($left, $right);
    }

    public function divide($left, $right)
    {
        return bcdiv($left, $right);
    }

    public function compare($left, $right)
    {
        return bccomp($left, $right);
    }

    public function isAvailable()
    {
        return extension_loaded('bcmath');
    }
}
