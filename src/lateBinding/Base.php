<?php


namespace App\lateBinding;


class Base
{
    public function isInstanceOf($className)
    {
        return collect(get_class($this))->concat(class_parents($this))->contains($className);
    }
}
