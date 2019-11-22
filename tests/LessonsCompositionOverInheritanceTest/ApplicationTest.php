<?php

use App\LessonsCompositionOverInheritance\Application;
use App\LessonsCompositionOverInheritance\Sanitizer;
use App\LessonsCompositionOverInheritance\SanitizerStripTagsDecorator;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function test()
    {
        $sanitizer = new Sanitizer();
        $decorated = new SanitizerStripTagsDecorator($sanitizer);
        $app = new Application($decorated);
        $result = $app->run('<p>text<p>');
        $this->assertEquals('text', $result);

        $result = $app->run('  <hr>   another text ');
        $this->assertEquals('another text', $result);
    }
}
