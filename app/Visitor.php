<?php


namespace App;


class Visitor
{
    protected static function resolveFacade($name)
    {
        if(is_object($name)){
            return $name;
        }

        return app()[$name];

    }
    public static function __callStatic($method, $arguments)
    {
       return (self::resolveFacade('Visitor'))->$method(...$arguments);
    }
}