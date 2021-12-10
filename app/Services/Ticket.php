<?php

namespace App\Services;

class Ticket
{
    public static function resolveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('ticket'))->$method(...$arguments);
    }
}
