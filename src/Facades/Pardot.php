<?php

namespace Khatfield\LaravelPardot\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Pardot
 * @package Khatfield\LaravelPardot\Facades
 *
 * @method static post($object, $operation, $parameters)
 */
class Pardot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pardot';
    }
}