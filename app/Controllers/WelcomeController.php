<?php

namespace App\Controllers;

use Sectorr\Core\View;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        return View::make('home');
    }
}
