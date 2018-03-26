<?php

namespace DesignPattern\Creational\FactoryMethod;

class ElephantFactory extends FactoryMethod
{
    public function getAnimal(string $food): AnimalInterface
    {
        return new Elephant($food);
    }
}