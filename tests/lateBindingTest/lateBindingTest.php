<?php

use App\LateBinding\ChildOfChild;
use PHPUnit\Framework\TestCase;

class lateBindingTest extends TestCase
{
    public function test()
    {
        $obj = new ChildOfChild();
        $this->assertTrue($obj->isInstanceOf('App\LateBinding\Base'));
        $this->assertFalse($obj->isInstanceOf('LateBinding\Base'));
        $this->assertTrue($obj->isInstanceOf('App\LateBinding\FirstChild'));
        $this->assertTrue($obj->isInstanceOf('App\LateBinding\ChildOfChild'));
    }
}
