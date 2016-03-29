<?php

namespace App\Controllers;

use Sectorr\Core\View;

class WelcomeController extends Controller
{
    public function index()
    {
        return View::make('home');
    }
}
