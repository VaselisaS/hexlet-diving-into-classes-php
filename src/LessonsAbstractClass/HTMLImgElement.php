<?php


namespace App\LessonsAbstractClass;


use phpDocumentor\Reflection\Types\Self_;

class HTMLImgElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['src'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid()
    {
        return collect($this->getAttributes())->every(function ($value, $key) {
            return in_array($key, self::getAttributeNames());
        });
    }
}
