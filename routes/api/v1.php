<?php

use App\Http\Controllers\Api\V1\UesCreateController;
use App\Http\Controllers\Api\V1\UesShowController;
use App\Routing\ApiV1Routes;
use Illuminate\Support\Facades\Route;

/** @see PingTest */
Route::get(ApiV1Routes::ping->value, static fn() => response(['message' => 'pong']))
    ->name(ApiV1Routes::ping->name);

/** @see UesCreateTest */
Route::post(ApiV1Routes::ues->value, UesCreateController::class)
    ->name(ApiV1Routes::ues->name);

/** @see UesShowTest */
Route::get(ApiV1Routes::ues_show->value, UesShowController::class)
    ->name(ApiV1Routes::ues_show->name);
