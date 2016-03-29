<?php

namespace App\Middleware;

use Sectorr\Core\Auth\Auth;
use Sectorr\Core\Contracts\MiddlewareContract;
use Sectorr\Core\Http\Redirect;

class Guest implements MiddlewareContract
{
    
    /**
     * @param $route
     * @param array $properties
     * @return bool|void
     */
    public static function allow($route, array $properties)
    {
        if (! Auth::check()) {
            return true;
        }
        return Redirect::route('home');
    }
}
