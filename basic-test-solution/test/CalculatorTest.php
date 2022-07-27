<?php
require "./src/lib/Calculator.php";
require "./vendor/autoload.php";
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testAllExpresions(){
        $calculator  =  new Calculator();
        $actualResult =  $calculator->calculate("add 2
        multiply 3
        add 2
        multiply 3
        divide 3
        subtract 1
        apply 3");
        $this->assertEquals(36,$actualResult);
    }
    public function testSingleExpresions(){
        $calculator  =  new Calculator();
        $actualResult =  $calculator->calculate("apply 3");
        $this->assertEquals(3,$actualResult);
    }
}
