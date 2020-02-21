<?php
require('PrintNumber.php');
use PHPUnit\Framework\Testcase;

class TestPrintNumber extends Testcase
{
    private $printNumber;

    protected function setUp()
    {
        $this->printNumber = new PrintNumber();
    }

    public function testPrintPositiveNumber()
    {
        $result = $this->printNumber->printNumbers(10);
        $this->assertEquals(True, $result);
    }

    public function testPrintZero()
    {
        $result = $this->printNumber->printNumbers(0);
        $this->assertEquals(False, $result);
    }

    public function testPrintNegativeNumber()
    {
        $result = $this->printNumber->printNumbers(-10);
        $this->assertEquals(False, $result);
    }

    public function testPrintString()
    {
        $result = $this->printNumber->printNumbers("sjsfn");
        $this->assertEquals(False, $result);
    }

    public function testPrintArr()
    {
        $result = $this->printNumber->printNumbers(array(1,2,3));
        $this->assertEquals(False, $result);
    }

    public function testPrintNull()
    {
        $result = $this->printNumber->printNumbers('');
        $this->assertEquals(False, $result);
    }


}
