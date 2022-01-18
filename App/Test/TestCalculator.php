<?php

namespace Test;
include_once "App\Ex1_DoiTenKhachHang\Calculator.php";

use Calculator;
use PHPUnit\Framework\TestCase;

class TestCalculator extends TestCase
{
    public function testAddition()
    {
        $a = new Calculator();
        $numberOne = 1;
        $numberTwo = 2;
        $addition = "+";
        $result = $a->calculate($numberOne, $numberTwo, $addition);
        $extend = 3;
        $this->assertEquals($result, $extend);

    }
}