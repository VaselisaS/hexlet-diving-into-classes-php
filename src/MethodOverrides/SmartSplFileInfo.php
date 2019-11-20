<?php


namespace App\MethodOverrides;

class SmartSplFileInfo extends \SplFileInfo
{
    public function getSize($unit = 'b')
    {
        if ($unit === 'b') {
            return parent::getSize();
        } elseif ($unit === 'kb') {
            return parent::getSize() / 1024;
        }
        throw new \Exception("Unknown unit name: {$unit}");
    }
}
