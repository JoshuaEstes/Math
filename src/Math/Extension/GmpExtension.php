<?php

namespace Math\Extension;

class GmpExtension implements ExtensionInterface
{
    public function add($left, $right)
    {
        return gmp_strval(gmp_add($left, $right));
    }

    public function subtract($left, $right)
    {
        return gmp_strval(gmp_sub($left, $right));
    }

    public function multiply($left, $right)
    {
        return gmp_strval(gmp_mul($left, $right));
    }

    public function divide($left, $right)
    {
        return gmp_strval(gmp_div($left, $right));
    }

    public function compare($left, $right)
    {
        return gmp_strval(gmp_cmp($left, $right));
    }

    public function isAvailable()
    {
        return extension_loaded('gmp');
    }
}
