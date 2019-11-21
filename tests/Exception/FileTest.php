<?php

use App\LessonsException\File;
use PHPUnit\Framework\TestCase;
class FileTest extends TestCase
{
    public function testRead()
    {
        $file = new File( __DIR__ . '/../../composer.json');
        var_dump($file);
        $this->assertNotNull($file->read());
    }


    public function testRead2()
    {
        $this->expectException(App\LessonsException\Exceptions\NotExistsException::class);
        $file = new File('/etc/wopwop');
        $file->read();
    }


    public function testRead3()
    {
        $this->expectException(App\LessonsException\Exceptions\NotReadableException::class);
        $file = new File('/etc/shadow');
        $file->read();
    }
}
