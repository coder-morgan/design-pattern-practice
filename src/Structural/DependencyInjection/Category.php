<?php

namespace DesignPattern\Structural\DependencyInjection;

class Category
{
    /**
     * @var StoreInterface $store
     */
    private $store;


    /**
     * @param  StoreInterface $store
     *
     * @return void
     */
    public function __construct(StoreInterface $store)
    {
        $this->store = $store;
    }


    /**
     * @return bool
     */
    public function setCache(): bool
    {
        return $this->store->set('category', 'test');
    }
}