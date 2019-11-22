<?php


namespace LessonsLateBindingTest;


use App\LessonsLateBinding\HTMLBrElement;
use App\LessonsLateBinding\HTMLDivElement;
use PHPUnit\Framework\TestCase;

class HTMLElementTest extends TestCase
{
    public function test()
    {
        $element = new HTMLBrElement();
        $expected = '<br>';
        $this->assertEquals($expected, $element->__toString());

        $element = new HTMLDivElement();
        $element->setTextContent('hello!');
        $expected = '<div>hello!</div>';
        $this->assertEquals($expected, $element->__toString());
    }
}
