<?php

/*
 * --------------------------------------------
 *      Sectorr routing.
 * --------------------------------------------
 */

use Sectorr\Core\Http\Route;

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);