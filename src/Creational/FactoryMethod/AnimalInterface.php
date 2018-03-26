<?php

namespace DesignPattern\Creational\FactoryMethod;

interface AnimalInterface
{
    public function __construct(string $food);

    public function eat();
}