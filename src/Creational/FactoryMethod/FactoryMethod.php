<?php

namespace DesignPattern\Creational\FactoryMethod;

abstract class FactoryMethod
{
    abstract public function getAnimal(string $food): AnimalInterface;

    /**
     * create object
     * @param string $food
     * @return AnimalInterface
     */
    public function create(string $food): AnimalInterface
    {
        return $this->getAnimal($food);
    }
}