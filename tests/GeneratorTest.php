<?php

use \PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: thom
 * Date: 24/05/2017
 * Time: 03:03 PM
 */

/**
 * Class GeneratorTest
 * @covers \Tools\Generator\TokenGenerator
 */
class GeneratorTest extends TestCase
{
    /**
     * @var string Authorize Only this characters
     */
    protected $characters;

    /**
     * SetUp() run once before all test
     */
    protected function setUp()
    {
        $generator = new \Tools\Generator\TokenGenerator();
        $this->characters = array_unique(str_split($generator->getCharacters()));
    }

    /**
     * Test of the integrity of the randomStringGenerator
     */
    public function testRequirementsGenerator()
    {
        $this->assertEquals(true,strlen("azerty1234")>=6);
        $this->assertEquals(false,strlen("aze")>=6);
        $this->assertNotEquals(false, preg_match('/\$/','azerty$1234'));
        $this->assertContains("9",$this->characters);
        $this->assertContains("b",$this->characters);
        $this->assertNotContains("$",$this->characters);
    }
}