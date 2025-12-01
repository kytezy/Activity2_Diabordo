<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/components-demo', [ComponentDemoController::class, 'index']);