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
    ], function () {
        Route::get('/', [\App\Http\Controllers\HouseController::class, 'index'])->name('index');

        Route::get('/o-proekte.html',
            [\App\Http\Controllers\IndexController::class, 'aboutTheProject'])
            ->name('aboutTheProject');

        Route::get('/novostoroyki-poltava-kontakty.html',
            [\App\Http\Controllers\IndexController::class, 'contacts'])
            ->name('contacts');

        Route::get('novostrojki-na-karte.html', [\App\Http\Controllers\MapController::class, 'index']);

        Route::get('print/room/{id}', [\App\Http\Controllers\HouseController::class, 'printRoom']);

        if ( ! Request::is('admin*') && (! Request::is('ua'))) {
            Route::get('/{slug}', [\App\Http\Controllers\HouseController::class, 'getBySlug']);
        }
    });
}
