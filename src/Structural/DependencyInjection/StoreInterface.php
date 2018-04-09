<?php

namespace DesignPattern\Structural\DependencyInjection;

interface StoreInterface
{
    /**
     * set cache
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     */
    public function set(string $key, string $value): bool;

    /**
     * @param string $key
     *
     * @return string
     */
    public function get(string $key): string;
}