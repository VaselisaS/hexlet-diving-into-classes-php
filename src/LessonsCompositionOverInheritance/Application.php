<?php


namespace App\LessonsCompositionOverInheritance;


class Application
{
    private $sanitizer;

    public function __construct($sanitizer)
    {
        $this->sanitizer = $sanitizer;
    }

    public function run($text)
    {
        return $this->sanitizer->sanitize($text);
    }
}
