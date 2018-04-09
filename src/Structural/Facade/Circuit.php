<?php

namespace DesignPattern\Structural\Facade;

interface Circuit
{
    /**
     * 接收RFID射频信号
     */
    public function rfid();

    /**
     * 低电压供电
     */
    public function powerSupply();

    /**
     * 断电
     */
    public function cutOut();
}