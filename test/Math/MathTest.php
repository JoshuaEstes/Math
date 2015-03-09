<?php

namespace Tests\Math;

use Math\Math;

class MathTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $extension = \Mockery::mock('Math\\Extension\\ExtensionInterface');
        $extension->shouldReceive('add')->andReturn('4');
        $math = new Math($extension);
        $this->assertEquals('4', $math->add(2, 2));
    }

    public function testSubtract()
    {
        $extension = \Mockery::mock('Math\\Extension\\ExtensionInterface');
        $math = new Math($extension);
        $extension->shouldReceive('subtract')->andReturn('0');
        $math = new Math($extension);
        $this->assertEquals('0', $math->subtract(2, 2));
    }

    public function testMultiply()
    {
        $extension = \Mockery::mock('Math\\Extension\\ExtensionInterface');
        $math = new Math($extension);
        $extension->shouldReceive('multiply')->andReturn('4');
        $math = new Math($extension);
        $this->assertEquals('4', $math->multiply(2, 2));
    }

    public function testDivide()
    {
        $extension = \Mockery::mock('Math\\Extension\\ExtensionInterface');
        $math = new Math($extension);
        $extension->shouldReceive('divide')->andReturn('1');
        $math = new Math($extension);
        $this->assertEquals('1', $math->divide(2, 2));
    }

    public function testCompare()
    {
        $extension = \Mockery::mock('Math\\Extension\\ExtensionInterface');
        $math = new Math($extension);
        $extension->shouldReceive('compare')->andReturn('0');
        $math = new Math($extension);
        $this->assertEquals('0', $math->compare(2, 2));
    }
}
