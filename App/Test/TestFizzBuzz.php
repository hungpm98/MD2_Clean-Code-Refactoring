<?php

use PHPUnit\Framework\TestCase;
include_once 'App\Ex2_FizzBuzz\FizzBuzz.php';
class FizzBuzzTest extends  TestCase
{

    public function checkNumber()
    {
        $test = new FizzBuzz();
        $number = 15;
        $result = $test->fizzBuzz($number);
        $expect = "FizzBuzz";
        $this->assertEquals($result,$expect);
    }
}