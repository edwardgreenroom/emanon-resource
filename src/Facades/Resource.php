<?php

namespace Emanon\Resource\Facades;

use Illuminate\Support\Facades\Facade;

class Resource extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'resource';
    }
}
