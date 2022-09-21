<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* STANDARD Routes
*/

Route::get(
    '/',
    [HomeController::class, 'index']
);

Route::get('/about-us', function () {
    return view(
        'home.about-us',
        ['title' => 'EasyCoach Ke | About Us']
    );
});

Route::get('/services', function () {
    return view(
        'home.services',
        ['title' => 'EasyCoach Ke | Services']
    );
});

Route::get('/routes', function () {
    return view(
        'home.routes',
        ['title' => 'EasyCoach Ke | Routes']
    );
});

/*
* BOOKING Routes
*/
Route::get(
    '/booking',
    [BookingController::class, 'index']
);

/*
* ADMIN Routes
*/
Route::get(
    '/admin',
    [AdminController::class, 'index']
)->middleware('auth');

Route::get(
    '/admin/login',
    [AdminController::class, 'login']
)->name("login");

Route::post(
    '/admin/authenticate',
    [AdminController::class, 'authenticate']
);

Route::get(
    '/logout',
    [AdminController::class, 'logout']
);

Route::post(
    '/routes/create',
    [RouteController::class, 'create']
);
