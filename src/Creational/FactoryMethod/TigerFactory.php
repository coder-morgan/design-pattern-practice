<?php

namespace DesignPattern\Creational\FactoryMethod;

class TigerFactory extends FactoryMethod
{
    /**
     * get animal
     * @param string $food
     *
     * @return AnimalInterface
     */
    public function getAnimal(string $food): AnimalInterface
    {
        return new Tiger($food);
    }
}