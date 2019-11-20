<?php

use App\MethodOverrides\SmartSplFileInfo;
use PHPUnit\Framework\TestCase;

class SmartSplFileInfoTest extends TestCase
{
    public function testGetSize()
    {
        $file = new SmartSplFileInfo(__DIR__ . '/../../composer.json');
        $size = new SplFileInfo(__DIR__ . '/../../composer.json');
        $this->assertEquals($size->getSize(), $file->getSize());
        $newSize = $size->getSize() / 1024;
        $this->assertEquals($newSize, $file->getSize('kb'));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $file = new SmartSplFileInfo(__DIR__ . '/../../composer.json');
        $file->getSize('something');
    }
}
