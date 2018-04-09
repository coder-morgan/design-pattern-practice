<?php

namespace DesignPattern\Structural\Facade;

class Facade
{
    /**
     * 汽车电路
     */
    private $circuit;

    /**
     * 汽车引擎
     */
    private $engine;

    /**
     * @param Circuit $circuit
     * @param Engine $engine
     */
    public function __construct(Circuit $circuit, Engine $engine)
    {
        $this->circuit = $circuit;
        $this->engine = $engine;
    }

    public function start()
    {
        $this->circuit->rfid();
        $this->circuit->powerSupply();
        $this->engine->ecu($this->circuit);
        $this->engine->ignite();
        $this->engine->starter();
    }

    public function stop()
    {
        $this->engine->ecu();
        $this->circuit->cutOut();
    }
}