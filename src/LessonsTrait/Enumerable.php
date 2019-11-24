<?php


namespace App\LessonsTrait;


trait Enumerable
{
    abstract public function getIterator(): iterable;

    public function maxBy($fn)
    {
        $items = $this->getIterator();
        if (!count($items)) {
            return null;
        }
        $result = array_reduce($items, function ($acc, $item) use ($fn) {
            $value = $fn($acc, $item);
            return $value >= 0 ? $acc : $item;
        }, $items[0]);
        return $result;
    }
}
