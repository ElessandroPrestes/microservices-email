<?php

use App\Jobs\AutomateCreated;
use App\Jobs\HeroCreated;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return response()->json(['message' => 'Microservice Email']);
});

Route::get('/email', function () {

    HeroCreated::dispatch('hero@hero.com')->onQueue('queue_email');

    return response()->json(['message' => 'Microservice Email']);
});