<?php

use App\Http\Controllers\RentalsController;
use App\Http\Controllers\ToolsController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'tools' => ToolsController::class,
    'rentals' => RentalsController::class,
]);
