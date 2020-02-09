<?php

namespace FelixL7\LaravelIvw;

use Illuminate\Support\Facades\Facade;

class IvwFacade extends Facade {

    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ivw';
    }
}
