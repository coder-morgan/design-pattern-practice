<?php

namespace DesignPattern\Creational\FactoryMethod;

class Elephant implements AnimalInterface
{
    /**
     * @var string $food
     */
    private $food;

    /**
     * construct
     * @param string $food
     *
     * @return void
     */
    public function __construct(string $food)
    {
        $this->food = $food;
    }

    public function eat()
    {
        // TODO: Implement eat() method.
    }
}