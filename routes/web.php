<?php

use App\Http\Controllers\UniversitetController;
use Illuminate\Support\Facades\Route;

#-----------------------UNIVERSITET ROUTES----------------------------
Route::get('/', [UniversitetController::class, 'index'])
    ->name('univer.index');



