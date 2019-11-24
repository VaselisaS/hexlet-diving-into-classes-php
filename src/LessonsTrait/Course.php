<?php


namespace App\LessonsTrait;


class Course
{
    use Enumerable;

    private $lessons;

    public function __construct($lessons)
    {
        $this->lessons = $lessons;
    }

    public function getIterator(): iterable
    {
        return $this->lessons;
    }
}
