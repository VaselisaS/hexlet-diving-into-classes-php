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
}
