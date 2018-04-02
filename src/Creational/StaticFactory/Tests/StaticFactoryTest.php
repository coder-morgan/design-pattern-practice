<?php

namespace DesignPattern\Creational\StaticFactory\Tests;

use DesignPattern\Creational\StaticFactory\Mysql;
use DesignPattern\Creational\StaticFactory\Sqlite;
use DesignPattern\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateMysql()
    {
        $this->assertInstanceOf(Mysql::class, StaticFactory::factory('mysql'));
    }

    public function testCanCreateSqlite()
    {
        $this->assertInstanceOf(Sqlite::class, StaticFactory::factory('sqlite'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('sqlServer');
    }
}