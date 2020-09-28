<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/tinker')->middleware([
    Illuminate\Cookie\Middleware\EncryptCookies::class,
    Illuminate\Session\Middleware\StartSession::class,
    Spatie\WebTinker\Http\Middleware\Authorize::class,
])->group(function () {
    Route::get('/', [Spatie\WebTinker\Http\Controllers\WebTinkerController::class, 'index']);
    Route::post('/', [Spatie\WebTinker\Http\Controllers\WebTinkerController::class, 'execute']);
});
