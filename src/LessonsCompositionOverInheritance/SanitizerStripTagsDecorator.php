<?php


namespace App\LessonsCompositionOverInheritance;


class SanitizerStripTagsDecorator implements SanitizerInterface
{
    private $sanitizer;

    public function __construct(Sanitizer $sanitizer)
    {
        $this->sanitizer = $sanitizer;
    }

    public function sanitize(string $text)
    {
        $result = strip_tags($text);
        return $this->sanitizer->sanitize($result);
    }
}
