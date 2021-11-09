<?php

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

$locals = ['', ...config('local.languages')];

foreach ($locals as $local) {
    Route::group([
        'prefix' => $local,
    ], function () use ($local) {
        Route::get('/', [\App\Http\Controllers\HouseController::class, 'index'])->name($local . '.index');

        Route::get('/o-proekte.html',
            [\App\Http\Controllers\IndexController::class, 'aboutTheProject'])
            ->name($local . '.aboutTheProject');

        Route::get('/novostoroyki-poltava-kontakty.html',
            [\App\Http\Controllers\IndexController::class, 'contacts'])
            ->name($local . '.contacts');

        Route::get('novostrojki-na-karte.html', [\App\Http\Controllers\MapController::class, 'index']);

        Route::get('print/room/{id}', [\App\Http\Controllers\HouseController::class, 'printRoom']);

        Route::get('category/{slug}', [\App\Http\Controllers\HouseController::class, 'getCategory'])
            ->name($local . '.category');

        if (!Request::is('admin*') && (!Request::is('ua'))) {
            Route::get('/{slug}', [\App\Http\Controllers\HouseController::class, 'getBySlug']);
        }
    });
}
