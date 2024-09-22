<?php

namespace Core;

class Container
{
    protected $bindings = [];

    public function bind($key, $builder)
    {
        $this->bindings[$key] = $builder;
    }

    public function resolve($key)
    {
        
        if (isset($this->bindings[$key])) {
            $resolver = $this->bindings[$key];
            return call_user_func($resolver);
        } else {
            throw new \Exception("{$key} not found in container");
        }
    }
}