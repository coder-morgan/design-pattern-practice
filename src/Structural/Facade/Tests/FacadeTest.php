<?php

namespace DesignPattern\Structural\Facade\Tests;

use DesignPattern\Structural\Facade\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testCarStart()
    {
        $circuit = $this->createMock(\DesignPattern\Structural\Facade\Circuit::class);

        $engine = $this->createMock(\DesignPattern\Structural\Facade\Engine::class);

        $engine->method('ecu')
            ->with($circuit);

        $engine->method('getName')
            ->will($this->returnValue('V12'));

        $faceade = new Facade($circuit, $engine);


        //对外接口简单
        $faceade->start();

        $this->assertEquals('V12', $engine->getName());
    }
}