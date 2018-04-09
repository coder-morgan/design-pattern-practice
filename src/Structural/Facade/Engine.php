<?php

namespace DesignPattern\Structural\Facade;

interface Engine
{

    /**
     * 发动机管理电脑
     *
     * @param Circuit $circuit
     */
    public function ecu(Circuit $circuit);

    /**
     * 发动机点火
     */
    public function ignite();

    /**
     * 启动机
     */
    public function starter();

    /**
     * 发动机名称
     *
     * @return string
     */
    public function getName(): string;
}