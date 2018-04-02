<?php

namespace DesignPattern\Creational\StaticFactory;

/**
 * 敲黑板
 * > 静态不能被模拟进行测试
 * > 不能被分类或模拟或有多个不同的实例
*/

final class StaticFactory
{

    /**
     * create db
     * @param string $type
     *
     * @return DBInterface
     */
    public static function factory(string $type): DBInterface
    {
        switch ($type) {
            case 'mysql':
                return new Mysql();
                break;

            case 'sqlite':
                return new Sqlite();
                break;

            default:
                throw new \InvalidArgumentException('Unknown db type');
                break;
        }
    }
}