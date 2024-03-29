<?php


namespace App\LateBinding;


class Base
{
    public function isInstanceOf($className)
    {
        return collect(get_class($this))->concat(class_parents($this))->contains($className);
    }
}
