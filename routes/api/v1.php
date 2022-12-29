<?php

use App\Routing\ApiV1Routes;
use Illuminate\Support\Facades\Route;

Route::get(ApiV1Routes::ping->value, static fn() => response(['message' => 'pong']))->name(ApiV1Routes::ping->name);
