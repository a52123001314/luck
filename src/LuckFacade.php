<?php

namespace Wdq\Luck;

use Illuminate\Support\Facades\Facade;

class LuckFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'luck';
    }
}