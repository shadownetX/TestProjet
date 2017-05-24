<?php

use \PHPUnit\Framework\TestCase;
use \Tools\Calculator\EasyCalculator as Calculator;

/**
 * Created by PhpStorm.
 * User: thom
 * Date: 24/05/2017
 * Time: 04:11 PM
 */

/**
 * Class CalculatorTest
 * @covers \Tools\Calculator\EasyCalculator
 */
class CalculatorTest extends TestCase
{
    /**
     * Test of differents calculs
     */
    public function testBasicsCalcul()
    {
        $this->assertEquals(10, Calculator::multiplier(5, 2));
        /**
         * custom test if result can be unsigned
         */
        $this->assertLessThan(-1, Calculator::ajouter(-5,-10));

    }

    /**
     * specials tests for division
     */
    public function testMoreComplexCalcul(){
        
        /**
         * custom test if division by 0
         */
        $this->assertNotEquals(0, Calculator::diviser(1, 0));
        $this->assertInternalType("string", Calculator::diviser(1, 0));
        $this->assertInternalType("int", Calculator::diviser(10, 1));
    }
}
