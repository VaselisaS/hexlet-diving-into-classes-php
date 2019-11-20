<?php


namespace App;


class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    protected function stringifyAttributes()
    {
        return collect($this->attributes)->map(function ($item, $key) {
            return " $key" . "=" . '"' . $item . '"';
        })->join('');
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key];
    }

    private function getClasses()
    {
        return collect(explode(' ', $this->getAttribute('class')));
    }

    private function stringifyClasses($attribute)
    {
        $this->attributes['class'] = $attribute->join(' ');
    }

    public function addClass($className)
    {
        $attribute = $this->getClasses()->push($className)->unique();
        $this->stringifyClasses($attribute);
    }

    public function removeClass($className)
    {
        $attribute = $this->getClasses()->filter(function ($value) use ($className) {
            return $value !== $className;
        });
        $this->stringifyClasses($attribute);
    }

    public function toggleClass($className)
    {
        $this->getClasses()->contains($className) ? $this->removeClass($className) : $this->addClass($className);
    }
}
