<?php

namespace DesignPattern\Structural\DependencyInjection;

class RedisStore implements StoreInterface
{
    /**
     * set cache
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     */
    public function set(string $key, string $value): bool
    {
        return true;
    }


    /**
     * @param string $key
     *
     * @return string
     */
    public function get(string $key): string
    {
        // TODO: Implement get() method.
    }
}