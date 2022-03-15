<?php

//include '../src/CalculatorController.php';
require "src/Calculator.php";

use PHPUnit\Framework\TestCase;

final class HextorgbaTest extends TestCase
{

    public function testCanBeConvertedHexToRgba()
    {
        $items = [
            "rgba(255,255,255, .3)" => ["#FFF", 0.3],
            "rgba(255,255,255, 1)" => ["#FFFFFF", 1],
            "rgba(255,255,255, .5)" => ["FFF", .5],
            "rgba(255,255,255, 1)" => ["FFFFFF", 1],
        ];

        foreach($items as $expectedResult => $item) {
            $calculator = new Calculator();
            $result = $calculator->hextorgba($item[0], $item[1]);
            $this->assertEquals(
                $expectedResult,
                $result
            );
        }
    }

    function testCanNotBeConvertedHexToRgba()
    {
        $calculator = new Calculator();
        $result = $calculator->hextorgba('FFFFF', 1);
        $this->assertEquals('Hex value must have 3 or 6 characters!', $result);
    }
}