<?php

namespace DesignPattern\Creational\SimpleFactory;

class SimpleFactory
{

    /**
     * create computer
     *
     * @return  Computer
     */
    public function createComputer(): Computer
    {
        return new Computer();
    }
}