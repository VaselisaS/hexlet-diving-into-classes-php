<?php

use App\lateBinding\ChildOfChild;
use PHPUnit\Framework\TestCase;

class lateBindingTest extends TestCase
{
    public function test()
    {
        $obj = new ChildOfChild();
        $this->assertTrue($obj->isInstanceOf('App\lateBinding\Base'));
        $this->assertFalse($obj->isInstanceOf('lateBinding\Base'));
        $this->assertTrue($obj->isInstanceOf('App\lateBinding\FirstChild'));
        $this->assertTrue($obj->isInstanceOf('App\lateBinding\ChildOfChild'));
    }
}
