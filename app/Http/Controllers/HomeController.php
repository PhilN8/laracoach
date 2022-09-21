<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Flasher $flasher)
    {
        return view('home.index', [
            'title' => 'EasyCoach Ke | Home'
        ]);
    }
}
