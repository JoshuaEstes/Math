<?php

namespace Tests\Math\Extension;

use Math\Extension\AutoExtension;

class AutoExtensionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (!extension_loaded('bcmath') || !extension_loaded('gmp')) {
            $this->markTestSkipped('No Known Math Extension Found');
        }
    }

    public function testIsAvailable()
    {
        $ext = new AutoExtension();
        $this->assertTrue($ext->isAvailable());
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($expected, $left, $right)
    {
        $ext = new AutoExtension();
        $this->assertEquals($expected, $ext->add($left, $right));
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
        $ext = new AutoExtension();
        $this->assertEquals($expected, $ext->subtract($left, $right));
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
        $ext = new AutoExtension();
        $this->assertEquals($expected, $ext->multiply($left, $right));
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
        $ext = new AutoExtension();
        $this->assertEquals($expected, $ext->divide($left, $right));
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
        $ext = new AutoExtension();
        $this->assertEquals($expected, $ext->compare($left, $right));
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
