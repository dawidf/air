<?php
namespace Air\BlogBundle\Tests\Libs;



use Air\BlogBundle\Libs\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase{

    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30,18);
        $this->assertEquals(48,$result);
    }
}