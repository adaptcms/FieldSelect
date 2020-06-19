<?php

namespace Adaptcms\FieldSelect\Facades;

use Illuminate\Support\Facades\Facade;

class FieldSelect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldSelect';
    }
}
