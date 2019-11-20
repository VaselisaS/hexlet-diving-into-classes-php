<?php

use App\HTMLDivElement;
use PHPUnit\Framework\TestCase;

class HTMLDivElementTest extends TestCase
{
    public function testClasses()
    {
        $class = 'one two';
        $div = new HTMLDivElement(['class' => $class]);
        $this->assertEquals($class, $div->getAttribute('class'));

        $div->addClass('small');
        $this->assertEquals('one two small', $div->getAttribute('class'));

        $div->addClass('small');
        $this->assertEquals('one two small', $div->getAttribute('class'));

        $div->removeClass('two');
        $this->assertEquals('one small', $div->getAttribute('class'));

        $div->toggleClass('small');
        $this->assertEquals('one', $div->getAttribute('class'));

        $div->toggleClass('small');
        $this->assertEquals('one small', $div->getAttribute('class'));
    }

    public function test()
    {
        $div = new HTMLDivElement();
        $expected = '<div></div>';
        $this->assertEquals($expected, $div->__toString());

        $div = new HTMLDivElement(['class' => 'w-75', 'id' => 'wop']);
        $expected = '<div class="w-75" id="wop"></div>';
        $this->assertEquals($expected, $div->__toString());

        $div = new HTMLDivElement(['name' => 'div', 'data-toggle' => 'true']);
        $div->setTextContent('Body');
        $expected = '<div name="div" data-toggle="true">Body</div>';
        $this->assertEquals($expected, $div->__toString());
    }
}
