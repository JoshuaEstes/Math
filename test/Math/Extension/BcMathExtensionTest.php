<?php

namespace Tests\Math\Extension;

use Math\Extension\BcMathExtension;

class BcMathExtensionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (!extension_loaded('bcmath')) {
            $this->markTestSkipped('BC Math Extension is not loaded');
        }
    }

    public function testIsAvailable()
    {
        $gmp = new BcMathExtension();
        $this->assertTrue($gmp->isAvailable());
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($expected, $left, $right)
    {
        $gmp = new BcMathExtension();
        $this->assertEquals($expected, $gmp->add($left, $right));
    }

    public function addDataProvider()
    {
        return array(
            array('4', 2, 2),
        );
    }

    /**
     * @dataProvider subtractDataProvider
     */
    public function testSubtract($expected, $left, $right)
    {
        $gmp = new BcMathExtension();
        $this->assertEquals($expected, $gmp->subtract($left, $right));
    }

    public function subtractDataProvider()
    {
        return array(
            array('0', 2, 2),
        );
    }

    /**
     * @dataProvider multiplyDataProvider
     */
    public function testMultiply($expected, $left, $right)
    {
        $gmp = new BcMathExtension();
        $this->assertEquals($expected, $gmp->multiply($left, $right));
    }

    public function multiplyDataProvider()
    {
        return array(
            array('4', 2, 2),
        );
    }

    /**
     * @dataProvider divideDataProvider
     */
    public function testDivide($expected, $left, $right)
    {
        $gmp = new BcMathExtension();
        $this->assertEquals($expected, $gmp->divide($left, $right));
    }

    public function divideDataProvider()
    {
        return array(
            array('1', 2, 2),
        );
    }

    /**
     * @dataProvider compareDataProvider
     */
    public function testCompare($expected, $left, $right)
    {
        $gmp = new BcMathExtension();
        $this->assertEquals($expected, $gmp->compare($left, $right));
    }

    public function compareDataProvider()
    {
        return array(
            array(-1, 1, 2),
            array(0, 2, 2),
            array(1, 3, 2),
        );
    }
}
