<?php

namespace DesignPattern\Creational\FactoryMethod\Tests;

use DesignPattern\Creational\FactoryMethod\Elephant;
use DesignPattern\Creational\FactoryMethod\ElephantFactory;
use DesignPattern\Creational\FactoryMethod\Tiger;
use DesignPattern\Creational\FactoryMethod\TigerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateElephant()
    {
        $factory = new ElephantFactory();
        $result = $factory->create('Botany');

        $this->assertInstanceOf(Elephant::class, $result);
    }

    public function testCanCreateTiger()
    {
        $factory = new TigerFactory();
        $result = $factory->create('Carnivorous');

        $this->assertInstanceOf(Tiger::class, $result);
    }
}