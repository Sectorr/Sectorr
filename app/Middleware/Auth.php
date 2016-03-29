<?php

namespace App\Middleware;

use Sectorr\Core\Contracts\MiddlewareContract;
use Sectorr\Core\Http\Redirect;

class Auth implements MiddlewareContract
{
    
    /**
     * @param $route
     * @param array $properties
     * @return bool|void
     */
    public static function allow($route, array $properties)
    {
        if (\Sectorr\Core\Auth\Auth::check()) {
            return true;
        }
        return Redirect::route('login');
    }
}
