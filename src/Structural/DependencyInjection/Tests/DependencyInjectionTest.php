<?php

namespace DesignPattern\Structural\DependencyInjection\Tests;

use DesignPattern\Structural\DependencyInjection\Category;
use DesignPattern\Structural\DependencyInjection\RedisStore;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $store = new RedisStore();
        $category = new Category($store);

        $this->assertTrue($category->setCache());
    }
}