<?php

namespace DesignPattern\Creational\Singleton\Test;

use DesignPattern\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $secondCall);
        $this->assertSame($firstCall, $secondCall);
    }
}