<?php

use PHPUnit\Framework\TestCase;
use App\HTMLHrElement;

class HTMLHrElementTest extends TestCase
{
    public function test()
    {
        $hr = new HTMLHrElement();
        $expected = '<hr>';
        $this->assertEquals($expected, $hr->__toString());

        $hr = new HTMLHrElement(['class' => 'w-75', 'id' => 'wop']);
        $expected = '<hr class="w-75" id="wop">';
        $this->assertEquals($expected, $hr->__toString());
    }
}
