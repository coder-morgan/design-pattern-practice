<?php

namespace DesignPattern\Creational\SimpleFactory\Tests;

use DesignPattern\Creational\SimpleFactory\Computer;
use DesignPattern\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateComputer()
    {
        $computer = (new SimpleFactory())->createComputer();
        $this->assertInstanceOf(Computer::class, $computer);
    }
}