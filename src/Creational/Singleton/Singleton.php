<?php

namespace DesignPattern\Creational\Singleton;

class Singleton
{
    /**
     * @var Singleton $instance
     */
    private static $instance;

    /**
     * 禁止外部创建
     */
    private function __construct()
    {
    }

    /**
     * 获取实例
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (!self::$instance instanceof self) {
            self::$instance = new  static();
        }

        return self::$instance;
    }

    /**
     * 禁止克隆
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
    }
}